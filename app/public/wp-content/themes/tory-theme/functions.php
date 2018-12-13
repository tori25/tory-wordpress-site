<?php

function tory_files() {
  wp_enqueue_script('tory_main_js', get_theme_file_uri('/js/scripts-bundled.js'),  NULL, microtime(), true);
  wp_enqueue_style('tory_custom_google_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('tory_font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('tory_main_styles', get_stylesheet_uri(), NULL, microtime());
}

  add_action('wp_enqueue_scripts', 'tory_files');

function tory_features() {
  add_theme_support('title-tag');
}

  add_action('after_setup_theme', 'tory_features');
?>