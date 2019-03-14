<?php
  add_action('rest_api_init', 'toryRegisterSearch');

  function toryRegisterSearch() {
    register_rest_route('tory/v1', 'search', array(
      'methods' => WP_REST_SERVER::READABLE,
      'callback' => 'torySearchResults'
    ));
  }

  function torySearchResults($data) {
    $mainQuery = new WP_Query(array(
      'post_type' => array('post', 'page', 'singer', 'genre', 'festival', 'event'),
      's' => sanitize_text_field($data['term'])
    ));

    $results = array(
      'generalInfo' => array(),
      'singers' => array(),
      'genres' => array(),
      'events' => array(),
      'festivals' => array(),
    );

    while($mainQuery->have_posts()) {
      $mainQuery->the_post();
      if(get_post_type() == 'post' OR get_post_type() == 'page') {
        array_push($results['generalInfo'], array(
          'title' => get_the_title(),
          'link' => get_the_permalink()
        ));
      }
      if(get_post_type() == 'singer') {
      console.log(the_post_type());
        array_push($results['singers'], array(
          'title' => get_the_title(),
          'link' => get_the_permalink()
        ));
      }
      if(get_post_type() == 'genre') {
        array_push($results['genres'], array(
          'title' => get_the_title(),
          'link' => get_the_permalink()
        ));
      }
      if(get_post_type() == 'festival') {
        array_push($results['festivals'], array(
          'title' => get_the_title(),
          'link' => get_the_permalink()
        ));
      }
      if(get_post_type() == 'event') {
        array_push($results['events'], array(
          'title' => get_the_title(),
         'link' => get_the_permalink()
        ));
      }
    }
    return $results;
  }
?>