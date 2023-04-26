<?php
// https://developer.wordpress.org/reference/functions/wp_enqueue_script/
function ap_enqueue()
{
  wp_register_style(
    'ap_theme',
    get_theme_file_uri('styles/css/main.css')
  );

  wp_enqueue_style('ap_theme');

  wp_enqueue_script('jquery-script', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('browser-script', get_template_directory_uri() . '/js/browser.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('breakpoints-script', get_template_directory_uri() . '/js/breakpoints.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('util-script', get_template_directory_uri() . '/js/util.js', array('jquery'), '1.0', true);
  wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}
