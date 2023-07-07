<?php
get_header();
if( have_posts() ) : 
	?>
	<main id="main">
		<section>
			<?
			while ( have_posts() ): the_post(); 
				//post	
			endwhile;
			?>
		</section>
	</main>
	<?
endif;
get_footer();