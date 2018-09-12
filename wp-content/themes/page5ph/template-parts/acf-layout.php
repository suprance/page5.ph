<?php /* Template Name: ACF 2018 Layout */ ?>

<?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <?php
        // PAGE BANNERS
        include(locate_template('page-templates/page-banners/_main-banner.php'));

        // PAGE LAYOUT
        include(locate_template('page-templates/flexible-layouts/_custom-layouts.php'));
      ?>
    </main><!-- #main -->
  </div><!-- #primary -->
  

<?php get_footer(); ?>
