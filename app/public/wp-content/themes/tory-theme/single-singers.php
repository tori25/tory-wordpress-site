<?php get_header();  while(have_posts()) { the_post();
  pageBanner();
?>

    <div class="container container--narrow page-section">
      <div class="generic-content">
        <div class="row group">
          <div class="one-third">
           <?php the_post_thumbnail('singerPortrait');?>
          </div>

          <div class="two-third">
           <?php the_content(); ?>
          </div>
        </div>
      </div>

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