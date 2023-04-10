<?php
function ap_enqueue()
{
  wp_register_style(
    'ap_theme',
    get_theme_file_uri('styles/css/main.css')
  );

  wp_enqueue_style('ap_theme');
}
