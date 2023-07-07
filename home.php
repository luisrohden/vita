<?php
get_header();
if( have_posts() ) : 
	?>
	<main id="main">
		<section class="archive-blog">
			<div class="container">
				<?
				while ( have_posts() ): the_post(); 
					//post	
				endwhile;
				?>
				
			</div>
		</section>
	</main>
	<?php
endif;
get_footer();
?>