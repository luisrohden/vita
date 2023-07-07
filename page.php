<?php
get_header();
?>
<section class="page">
    <div class="container">
        <h1><?php echo the_title();?></h1>
        <h2><?php echo the_field('subtitle');?></h2>
    </div>
    <?php echo the_content(); ?>
</section>

<?php
get_footer();
?>