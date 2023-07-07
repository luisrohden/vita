<?php

//Roots
include(get_template_directory().'/lib/roots/init.php');
include(get_template_directory().'/lib/roots/filters.php');
include(get_template_directory().'/lib/roots/scripts.php');
include(get_template_directory().'/lib/roots/sidebar.php');
include(get_template_directory().'/lib/roots/debug.php');

//Projeto
include(get_template_directory().'/lib/project/acf/hooks.php');
include(get_template_directory().'/lib/project/config-pages.php');
include(get_template_directory().'/lib/project/ajax.php');
include(get_template_directory().'/lib/project/pre-posts.php');
//Wocommerce Themes
//include(get_template_directory().'/lib/project/woocommerce-filters.php');
include(get_template_directory().'/lib/roots/functions/showSwiper.php');
include(get_template_directory().'/lib/roots/functions/lr_print.php');
global $showSwiperControl;
$showSwiperControl = 0;

	
	