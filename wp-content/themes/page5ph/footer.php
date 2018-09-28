<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 5pageph
 */

$menuArgs = array(
  'theme_location' => 'footer-menu',
  'menu'           => 3,
  'container'      => false,
  'menu_class'     => 'ul-footer-menu list-unstyled list-inline open-sub parent-nav-1-footer',
  'depth'          => 3
);

  $footerLogo = (get_field('f_main_logo', 'option') ? get_field('f_main_logo', 'option')['url'] : imgfolder('no_image.png') );
  $middleLogo = (get_field('h_middle_logo', 'option') ? get_field('h_middle_logo', 'option')['url'] : imgfolder('no_image.png') );
?>
  </div><!-- #content -->
    <footer id="colophon" class="site-footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
              <div class="footer1">
                <div class="image-holder">
                  <img src="<?php _e($footerLogo); ?>" alt="Page5.ph">
                </div>
                <div class="content-holder">
                  <p>
                    <?php _e(get_field('disclaimer', 'option')); ?>
                  </p>
                </div>
                <div class="media-holder">
                  <?php if (get_field('twitter_link', 'option')) { ?>
                    <a href="<?php _e(get_field('twitter_link', 'option')); ?>" target="_blank"><div class="twit"><i class="fa fa-twitter" aria-hidden="true"></i></div></a>
                  <?php } ?>
                  <?php if (get_field('facebook_link', 'option')) { ?>
                    <a href="<?php _e(get_field('facebook_link', 'option')); ?>" target="_blank"><div class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
                  <?php } ?>
                  <?php if (get_field('youtube_link', 'option')) { ?>
                    <a href="<?php _e(get_field('youtube_link', 'option')); ?>" target="_blank"><div class="yt"><i class="fa fa-youtube" aria-hidden="true"></i></div></a>
                  <?php } ?>
                  <?php if (get_field('instagram_link', 'option')) { ?>
                    <a href="<?php _e(get_field('instagram_link', 'option')); ?>" target="_blank"><div class="yt"><i class="fa fa-instagram" aria-hidden="true"></i></div></a>
                  <?php } ?>
                </div>
                <div class="about-us-holder">
                  <p class="custom-style">Contact us via:</p>
                  <p><a href="mailto:editor@page5.ph"><i class="fa fa-envelope" aria-hidden="true"></i> editor@page5.ph</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
              <div class="footer2">
                <div class="title-holder">
                  <p><strong>POPULAR POSTS</strong></p>
                  <div class="ribbon-bottom"></div>
                </div>
                <div class="pop-post-holder">
                <?php
                  if ( have_rows('p_posts', 'option') ) {
                    while ( have_rows('p_posts', 'option')) {
                      the_row();
                      $post_object = get_sub_field('p_p_posts', 'option');
                      if ($post_object) {
                        $post = $post_object;
                        $text = apply_filters( 'the_content', strip_shortcodes( $post->post_content ) );
                        $text = str_replace(']]>', ']]&gt;', $text);
                        $excerpt_length = apply_filters( 'excerpt_length', 10 );
                        $text = wp_trim_words( $text, $excerpt_length );
                        setup_postdata($post); ?>
                        <div class="post">
                          <div class="image-holder">
                            <a href="<?php the_permalink(); ?>">
                              <img src="<?php _e(get_the_post_thumbnail_url()); ?>">
                            </a>
                          </div>
                          <div class="text-holder">
                            <div class="title-holder-inner"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                            <div class="date-holder"><?php _e(get_the_date( get_option( 'F y, Y' ) ) ); ?></div>
                          </div>
                        </div>
                        <?php
                        wp_reset_postdata();
                      }
                    }
                  } else { ?>
                    <div class="col">
                      <p class="text-center">Sorry, no post/s at the moment.</p>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
              <div class="footer3">
                <div class="title-holder">
                  <p><strong>NEWSLETTER</strong></p>
                  <div class="ribbon-bottom"></div>
                </div>
                <h5>Get Latest News and Updates<br/>Straight to your Inbox!</h5>
                <div class="newsletter">
                  <?php dynamic_sidebar( 'footer_newsletter_footer' ); ?>
                </div>
                <div class="privacy">
                  <p>View our <a href="/privacy-policy/">Privacy Policy</a> | <a href="/cookie-policy/">Cookie Policy</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6 hide-sm">
              <div class="copyright">
                <?php _e(get_field('copyright', 'option')); ?>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 d-none d-md-block">
              <div class="footer-menu-col">
                <?php wp_nav_menu( $menuArgs ); ?>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 visible-sm">
              <div class="copyright">
                <?php _e(get_field('copyright', 'option')); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div><!-- #page -->
  <div class="container">
    <div class="row">
      <div class="col-12"><?php dynamic_sidebar( 'footer_adsense' ); ?></div>
    </div>
  </div>

  <?php wp_footer(); ?>
<!--
#Created by "Mind Brawl Co."
#Developer: Carlo B.
#Designed: JMOH
-->
  </body>
</html>
