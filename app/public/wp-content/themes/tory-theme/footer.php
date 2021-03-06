 </body>
  <footer class="site-footer">
    <div class="site-footer__inner container container--narrow">
      <div class="group">
        <div class="site-footer__col-one">
          <h1 class="school-logo-text school-logo-text--alt-color"><a href="<?php echo site_url();  ?>"<strong>Tory&#39s</strong> Site</a></h1>
          <p><a class="site-footer__link" href="#">555.555</a></p>
        </div>

        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <h3 class="headline headline--small">Explore</h3>
            <nav class="nav-list">

              <ul>
                <li><a href="<?php echo site_url('/about-me'); ?>">About Me</a></li>
                <li><a href="#">Programs</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Campuses</a></li>
              </ul>
            </nav>
          </div>

          <div class="site-footer__col-three">
            <h3 class="headline headline--small">Learn</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="#">Legal</a></li>
                <li><a href="<?php echo site_url('/privacy-policy')?>">Privacy</a></li>
                <li><a href="#">Careers</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="site-footer__col-four">
          <h3 class="headline headline--small">Connect With Us</h3>
          <nav>
            <ul class="min-list social-icons-list group">
              <li><a href="//www.facebook.com/vera.oprea.5" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="//www.youtube.com/channel/UCTzI26NRu1UQwd7xWGnq5Dw?view_as=subscriber" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/vera-mezhvynskiy-a12467a2/" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </footer>
<?php wp_footer(); ?>
</html>