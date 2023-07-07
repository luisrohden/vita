<?php
function showBreadcumb(){
	?>
	<ul>
		<li><a href="<?php echo get_site_url();?>">Home</a></li>
		<?php
		if(is_page()):
			$parent= wp_get_post_parent_id();
			if($parent==90):
				?>
				<li><span><?php echo get_the_title($parent);?></span></li>
				<?php

			elseif($parent):
				?>
				<li><a href="<?php echo get_permalink($parent);?>"><?php echo get_the_title($parent);?></a></li>
				<?php
			endif;
			?>
			<li><span><?php echo the_title();?></span></li>
			<?php
		endif;
		if(is_home()):
			?>
			<li><span>Blog</span></li>
			<?php
		endif;
		if(is_archive()):
			?>
			<li><span><?php echo post_type_archive_title( '', false );?></span></li>
			<?php
		endif;
		if(is_single()){
			$post_type=get_post_type();
			$post_type_name=get_post_type_object($post_type);
			//print_r($post_type_name->labels->name);
			?>
			<li><a href="<?php echo get_site_url().'/'.$post_type;?>"><?php echo $post_type_name->labels->name;?></a></li>
			<li><span><?php the_title();?></span></li>
			<?php
		}
		?>
	</ul>
	<?php
};