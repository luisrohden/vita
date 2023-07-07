<?php
$contatos = get_field('contatos','option');
$social = get_field('social','option');
$cookies = get_field('cookies','option');
$copywrite = get_field('copywrite','option');
$logo_footer = get_field('logo_footer','option');
?>
<script>
const form_locais = '<?php echo json_encode(get_field('locais','option'));?>';
//console.log(form_locais);
</script>
<footer class="footer">
    <div class="container">
        <div class="flex jCenter logo">
            <img src="<?php echo $logo_footer['url'];?>" />
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu_footer',
                        'menu' => 'Menu Footer',
                        'container' => '',
                        'menu_class' => 'no-format no-margin no-padding'
                    ) 
                );
                ?>

            </div>
            <div class="col-md-3 col-12">
                <?php
                foreach($contatos as $contact):
                    ?>
                    <div class="contact">
                        <div class="title">
                            <?php echo $contact['title'];?>
                        </div>
                        <div class="value">
                            <?php echo $contact['value'];?>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>
            <div class="col-md-3 col-12">
                <?php
                foreach($social as $item):
                    ?>
                    <div class="socialItem">
                        <div class="icon">
                            <img src="<?php echo $item['icon']['url'];?>" title="<?php echo $item['text'];?>"/>
                        </div>
                        <div class="text">
                            <?php echo $item['text'];?>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>
        </div>
        <div class="cookies">
            <?php echo $cookies;?>
        </div>
        <div class="row jBetween">
            <div class="w-auto">
                <?php echo $copywrite;?>
            </div>
            <div class="w-auto">
                <a href="https://www.vitaminaweb.com.br/" target="_blank">
                    <img src="<?php echo get_template_directory_uri();?>/assets/layout/VitaminaWeb.png" />
                </a>
            </div>
        </div>
    </div>
</footer>
<?php
wp_footer();
?>
</html>