<?php

function hypersolution_assets() {
  wp_enqueue_style(
    'hypersolution-style',
    get_stylesheet_uri(),
    [],
    filemtime(get_stylesheet_directory() . '/style.css')
  );

  wp_enqueue_script(
    'hypersolution-js',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    filemtime(get_template_directory() . '/assets/js/main.js'),
    true
  );
}

add_action('wp_enqueue_scripts', 'hypersolution_assets');

