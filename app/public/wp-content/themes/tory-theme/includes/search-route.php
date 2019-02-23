<?php
  add_action('rest_api_init', 'toryRegisterSearch');

  function toryRegisterSearch() {
    register_rest_route('tory/v1', 'search', array(
      'methods' => WP_REST_SERVER::READABLE,
      'callback' => 'torySearchResults'
    ));
  }

  function torySearchResults() {
    $singers = new WP_Query(array(
      'post_type' => 'singers'
    ));

    $singerResults = array();

    while($singers->have_posts()) {
      $singers->the_post();
      array_push($singerResults, array(
        'title' => get_the_title(),
        'link' => get_the_permalink()
      ));
    }

    return $singerResults;
  }
?>