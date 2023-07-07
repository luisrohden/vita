<?php
$data=get_field('diff',get_the_ID());
?>
<section id="diff">
    <div class="container">
        <div class="content">
            <?php echo $data['content'];?>
        </div>
        <div class="cta">
            <a class="cta__button" href="<?php echo $data['cta']['link'];?>">
                <?php echo $data['cta']['text'];?>
            </a>
        </div>
        <div class="footer_text">
            <?php echo $data['footer_text'];?>
        
        </div>
    </div>

</section>