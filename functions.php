<?php

// set up
add_theme_support('menus');


// includes
include(get_template_directory().'/includes/front/enqueue.php');
include(get_template_directory().'/includes/setup.php');
include(get_template_directory().'/includes/widgets.php');

//Actions and Hooks
add_action('wp_enqueue_scripts','ju_enqueue');
add_action('after_setup_theme', 'ju_setuptheme');
add_action('widgets_init', 'ju_widgets');



//shortcodes


 ?>
