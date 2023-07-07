<?php
function register_acf_options_pages() {
    // Check function exists.
    if( !function_exists('acf_add_options_page') )
        return;

    // register options page.
    $option_page = acf_add_options_page(array(
        'page_title'    => __('Configurações Gerais'),
        'menu_title'    => __('Tema'),
        'menu_slug'     => 'theme-config',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'position'      => 1
    ));

    /*
    acf_add_options_page(array(
        'page_title'    => __('Arquivo de Blog'),
        'menu_title'    => __('Arquivo de Blog'),
        'menu_slug'     => 'theme-archive-blog',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'parent_slug'    => 'edit.php',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'     => 'Arquivo de Produtos',
        'menu_title'    => 'Arquivo de Produtos',
        'menu_slug'     => 'theme-archive-produtos',
        'parent_slug'    => 'edit.php?post_type=produtos',
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Arquivo de Fabricantes',
        'menu_title'    => 'Arquivo de Fabricantes',
        'menu_slug'     => 'theme-archive-fabricantes',
        'parent_slug'    => 'edit.php?post_type=fabricantes',
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Arquivo de Eventos',
        'menu_title'    => 'Arquivo de Eventos',
        'menu_slug'     => 'theme-archive-eventos',
        'parent_slug'    => 'edit.php?post_type=eventos',
    ));    
    */
}

// Hook into acf initialization.
add_action('acf/init', 'register_acf_options_pages');
