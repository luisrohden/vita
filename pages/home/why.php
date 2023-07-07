<?php
$data=get_field('why',get_the_ID());

?>
<section id="why">        
    <?php
    if(is_array($data) && count($data)){
        $slides = [];
        $i = 0;
        $style = '';
        foreach($data as $slide){
            $slides[] = '
                <div class="whyBlock whyBlock_' . $i . '">
                    <div class="container">
                        <div class="whyBlock_area">
                            <div class="whyBlock__title">
                                ' . $slide['title'] . '    
                            </div>
                            <div class="whyBlock__subtitle">
                                ' . $slide['subtitle'] . '    
                            </div>
                            <div class="whyBlock__content">
                                ' . $slide['content'] . '    
                            </div>
                        </div>
                    </div>
                </div>
            ';
            $style.='
            #why .whyBlock.whyBlock_'.$i.'{
                background-image:url(' . $slide['background']['sizes']['medium_large'] . ');
            }
            @media (min-width: 600px) and (max-width: 1024px)  {
                #why .whyBlock.whyBlock_'.$i.'{
                    background-image:url(' . $slide['background']['sizes']['large'] . ');
                }
            }
            @media (min-width: 1024px){
                #why .whyBlock.whyBlock_'.$i.'{
                    background-image:url(' . $slide['background']['url']. ');
                }
            }';
            
            ;
            $i++;


        }
    }
    $args=[
        'autoplay' => false,
        'type'=> 'content',
        'content'=> $slides,
        'perView' => 1
    ];
    showSwiper($args);
    ?>
    <style>
        <?php
        echo $style;
        ?>
    </style>
</section>