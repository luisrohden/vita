<?php
/*
function posts_blog_config($query){
	if ( ! is_admin() && $query->is_main_query() && is_home( ) ) {	
		$query->set( 'posts_per_page', 6 );
	}
	if( $query->query_vars['post_type'] === 'product'){
		$query->set( 'meta_query', array(
			array(
					'key' => 'is_product_plan',
					'compare' => 'NOT EXISTS'
				),
	    	)
		);
	}
}
add_action( 'pre_get_posts', 'posts_blog_config' );
*/