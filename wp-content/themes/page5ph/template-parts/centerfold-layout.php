<?php
/**
 *  Template Name: Centerfold Layout
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 5pageph
 */
get_header();
?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main myCenterfoldLayout">
      <div class="banner-container">
        <div class="banner-holder">
          <?php query_posts('cat=10&posts_per_page=1');
            if ( have_posts() ) {
              while ( have_posts() ) {
                the_post(); ?>
                <img src="<?php _e(get_the_post_thumbnail_url()); ?>">
              <?php }
              wp_reset_postdata(); ?>
            <?php } ?>
        </div>
      </div>
       <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-8">
              <div class="centerfold-content">
                <div class="row">
                  <?php
                  query_posts('cat=10&posts_per_page=1'); // centerfold category is 10
                  if ( have_posts() ) {

                     while ( have_posts() ) {
                      the_post(); ?>
                      <div class="col">
                        <div class="centerfold-container">
                          <h4><?php the_title(); ?></h4>
                          <div class="content-holder">
                            <?php the_content(); ?>
                          </div>
                        </div>
                      </div>
                    <?php }
                    wp_reset_postdata(); ?>

                  <?php } else { ?>

                    <div class="col">
                      <p class="text-center">Sorry, no post/s at the moment in centerfold</p>
                    </div>

                  <?php } ?>
                </div>
              </div>
              <hr>
              <div class="leave-a-reply-container">
                <h3>Leave a reply</h3>
                <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                <div class="fb-comments" data-href="<?php _e($actual_link); ?>" data-numposts="5"></div>
              </div>
              <div class="previous-articles-container">
                <?php include_once('single/single-centerfold-articles.php'); ?>
              </div>
            </div>

              <div class="col-sm-6 col-md-6 col-lg-4">
                <?php include_once('custom-sidebar.php'); ?>
              </div>
          </div>
        </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
