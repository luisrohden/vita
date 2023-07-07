<?php
get_header();
get_template_part('templates/page/header');
if( have_posts() ) : 
	the_post(); 
	$fields=get_fields(get_the_ID());
	?>
	<h1><?php the_title();?></h1>
	<div><?php the_content();?></div>
	<?php
endif;
get_footer();