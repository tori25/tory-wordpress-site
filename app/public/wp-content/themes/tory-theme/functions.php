<?php

function tory_files() {
  wp_enqueue_style('tory_main_styles', get_stylesheet_uri());
}

  add_action('wp_enqueue_scripts', 'tory_files');
?>