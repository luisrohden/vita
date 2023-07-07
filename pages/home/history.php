<?php
$history=get_field('historia',get_the_ID());

?>
<section id="history">
    <div class="container">
        <h2 class="h2"><?php echo $history['title'];?></h2>
        <h3 class="subtitle"><?php echo $history['subtitle'];?></h3>
        <div class="content">
            <?php echo $history['content'];?>
            
        </div>
        <?php
        if(is_array($history['dates']) && count($history['dates'])){
            $slides = [];
            foreach($history['dates'] as $date){
                $slides[] = '
                    <div class="dateBlock">
                        <div class="dateBlock__date">
                            <span>' . $date['date'] . '    </span>
                        </div>
                        <div class="dateBlock__image">
                            <img src="' . $date['image']['sizes']['thumbnail'] . '" />
                        </div>
                        <div class="dateBlock__title">
                            ' . $date['title'] . '
                        </div>
                        <div class="dateBlock__subtitle">
                            ' . $date['subtitle'] . '
                        </div>
                    </div>
                ';
                
            }
        }
        $args=[
            'autoplay' => false,
            'type'=> 'content',
            'content'=> $slides,
            'perView' => 2
        ];
        showSwiper($args);
        ?>
    </div>

</section>