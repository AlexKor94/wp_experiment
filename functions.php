<?php

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));

// Hooks
add_action('wp_enqueue_scripts', 'ap_enqueue');
add_action('init', 'my_theme_register_menus');
