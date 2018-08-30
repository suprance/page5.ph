<?php /* Template Name: Gengo Template - ACF 2018 */ ?>

<?php get_header('unified-navbar'); ?>
    
  <?php
    // PAGE BANNERS
    include(locate_template('page-templates/page-banners/_main-banner.php'));

    // PAGE LAYOUT
    include(locate_template('page-templates/flexible-layouts/_custom-layouts.php'));
  ?>

<?php get_footer(); ?>
