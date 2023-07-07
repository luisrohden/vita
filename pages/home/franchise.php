<?php
$data=get_field('franchise',get_the_ID());
?>
<section id="franchise">
    <div class="container">
        <h2 class="h2 h2--white">
            <?php echo $data['title']; ?>
        </h2>
        <div class="row">
            <?php
            foreach($data['cards'] as $card):
                ?>
                <div class="col-md-6 col-12">
                    <div class="blockFranchise">
                        <div class="image">
                            <img src="<?php echo $card['image']['url'];?>" />
                            
                        </div>
                        <div class="content">
                            <div class="text">
                                <?php echo $card['texto'];?>
                            </div>
                            <div class="blockFranchise_cta cta">
                                <a class="cta__button " href="<?php echo $card['cta']['link'];?>">
                                    <?php echo $card['cta']['text'];?>
                                </a>
                            </div>
                        </div>
                    </div>    
                </div>
                <?php
            endforeach;
            ?>
        </div>
    </div>
    <style>
        #franchise{
            background-image: url(<?php echo $data['background']['url'];?>);       
        }
    </style>
</section>
