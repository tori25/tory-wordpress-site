<?php

function pageBanner($args = NULL) {
  if(!$args['title']){
     $args['title'] = get_the_title();
  }

  if(!$args['subtitle']){
     $args['subtitle'] = get_field('page_banner_subtitle');
  }

  if (!$args['photo']) {
    if (get_field('page_banner_background_image')) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
    }
  }
  ?>
    <div class="page-banner">
      <div class="page-banner__bg-image"
       style="background-image: url(<?php echo $args['photo'] ?>);">
    </div>

      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>

        <div class="page-banner__intro">
          <p><?php echo $args['subtitle'] ?></p>
        </div>
        </div>
    </div>

  <?php }


function tory_files() {
  wp_enqueue_script(
    'googleMap',
    '//maps.googleapis.com/maps/api/js?key=AIzaSyBBgy0_sGmK_XhIG3gWLBziGrKHwDifw1A',
    NULL,
    microtime(),
    true
  );
  wp_enqueue_script('tory_main_js', get_theme_file_uri('/js/scripts-bundled.js'),  NULL, microtime(), true);
  wp_enqueue_style('tory_custom_google_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('tory_font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('tory_main_styles', get_stylesheet_uri(), NULL, microtime());
}

  add_action('wp_enqueue_scripts', 'tory_files');

function tory_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('singerLandscape', 400, 260, true);
  add_image_size('singerPortrait', 480, 650, true);
  add_image_size('pageBanner', 1500, 350, true);
}

  add_action('after_setup_theme', 'tory_features');

  function tory_adjust_queries ($query) {
    if(!is_admin() AND is_post_type_archive('genre') AND $query->is_main_query()){
      $query->set('ordeby', 'title');
      $query->set('order', 'ASC');
      $query->set('posts_per_page', -1);
    }

    if(!is_admin() AND is_post_type_archive('event') AND $query-> is_main_query()) {
      $today = date('Ymd');
      $query-> set('meta_key', 'event_date');
      $query-> set('orderby','meta_value_num');
      $query-> set('order','ASC');
      $query-> set('meta_query',array(
        array('key' => 'event_date',
              'compare' => '>=',
              'value' => $today ,
              'type' => 'numeric'
              )
        ));
    }
  }

  add_action('pre_get_posts', 'tory_adjust_queries');

  function toryMapKey ($api) {
    $api['key'] = 'AIzaSyBBgy0_sGmK_XhIG3gWLBziGrKHwDifw1A';
    return $api;
  }

  add_filter('acf/fields/google_map/api', 'toryMapKey');