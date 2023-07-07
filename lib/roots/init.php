<?php
//define( 'WP_DEBUG', true );

/**
 * Roots initial setup and constants
 */
function roots_setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/roots-translations
  #load_theme_textdomain('te_text', get_template_directory() . '/languages');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus(array(
    'menu_main' => __('Menu Principal', 'roots'),
    'menu_mobile' => __('Menu Principal - Mobile', 'roots'),
    'menu_footer' => __('Menu Rodapé', 'roots')
  ));

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', array('caption', 'comment-form', 'comment-list'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_theme_support( 'editor-styles' );
  add_editor_style(get_template_directory().'/assets/css/editor-style.css');
  // Image Sizes
  add_image_size( 'block-size',150, 150,true);

}
add_action('after_setup_theme', 'roots_setup');


