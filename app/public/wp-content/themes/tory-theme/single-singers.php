<?php get_header();  while(have_posts()) { the_post(); ?>

  <div class="page-banner">
    <div class="page-banner__bg-image"
     style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);">
  </div>

    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>

      <div class="page-banner__intro">
        <p>Do not forget to replace me later</p>
      </div>
      </div>
  </div>

    <div class="container container--narrow page-section">
      <div class="generic-content"> <?php the_content(); ?> </div>

      <?php $relatedGenres = get_field('related_genres');

        if($relatedGenres) {
        echo '<hr class="section-break">';
        echo '<h2 class="headline headline--medium">Genre(s)<h2>';
        echo '<ul class="link-list min-list">';
       foreach($relatedGenres as $genre) { ?>
         <li><a href="<?php echo get_the_permalink($genre); ?>"><?php echo
         get_the_title($genre); ?></a></li>
      <?php }
      echo '</ul>';
        } ?>
    </div>
    </div>

  <?php } get_footer(); ?>