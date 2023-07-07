<?php
function roots_scripts()
{
	$assets     = array(
		'application.css' => get_template_directory_uri() . '/assets/css/application.css',
		'bootstrap.css'	=> 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
		'jquery'    		=> '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
		//'jquery-mask'  		=> '//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js',
		//'bootstrap' 		=> get_template_directory_uri().'/assets/js/bootstrap.js',
		'swiper'    		=> '//cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js',
		'js'        		=> get_template_directory_uri() . '/assets/js/scripts.min.js',
	);
	wp_enqueue_style('bootstrap.css', $assets['bootstrap.css'], false, null);
	wp_enqueue_style('application.css', $assets['application.css'], false, null);


	wp_deregister_script('jquery');
	wp_register_script('jquery', $assets['jquery'], array(), null, true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('swiper', $assets['swiper'], array(), null, true);
	wp_enqueue_script('scripts', $assets['js'], array(), null, true);
		
		
	
	/*
	
	wp_enqueue_script('jquery-mask', $assets['jquery-mask'], array(), null, true);
	wp_enqueue_script('bootstrap', $assets['bootstrap'], array(), null, true);
	
	wp_enqueue_script('roots_js', $assets['js'], array(), null, true);
	*/
	
	wp_localize_script(
            'roots_js',
            'ajaxTheme',
            array( 'url' => admin_url( 'admin-ajax.php' ) )
    );
	
}
add_action('wp_enqueue_scripts', 'roots_scripts', 100);

function wpdocs_theme_add_editor_styles() {
    add_editor_style( get_template_directory_uri().'/assets/css/editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );