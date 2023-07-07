<?php
get_header();
the_post();
?>
<main id="home">
    <?php
    get_template_part('pages/home/history');
    get_template_part('pages/home/why');
    get_template_part('pages/home/diff');
    get_template_part('pages/home/news');
    get_template_part('pages/home/franchise');
    ?>
</main>
<?php




get_footer();
?>