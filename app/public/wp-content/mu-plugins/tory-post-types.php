<?php

function tory_post_types() {
  //Event Post Type
  register_post_type('event', array(
    'supports' => array('title', 'editor', 'content', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array (
    'name' => 'Events',
    'add_new_item' => 'Add New Event',
    'edit_item' => 'Edit Event',
    'all_items' => 'All Events',
    'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar-alt'
  ));

  // Genre Post Type
  register_post_type('genres', array(
      'supports' => array('title', 'editor'),
      'rewrite' => array('slug' => 'genres'),
      'has_archive' => true,
      'public' => true,
      'labels' => array (
        'name' => 'Genres',
        'add_new_item' => 'Add New Genres',
        'edit_item' => 'Edit Genre',
        'all_items' => 'All Genres',
        'singular_name' => 'Genre'
      ),
      'menu_icon' => 'dashicons-awards'
    ));

    // Singer Post Type
      register_post_type('singers', array(
          'supports' => array('title', 'editor', 'thumbnail'),
          'public' => true,
          'labels' => array (
            'name' => 'Singers',
            'add_new_item' => 'Add New Singers',
            'edit_item' => 'Edit Singer',
            'all_items' => 'All Singers',
            'singular_name' => 'Singer'
          ),
          'menu_icon' => 'dashicons-universal-access'
        ));
}

add_action('init', 'tory_post_types');