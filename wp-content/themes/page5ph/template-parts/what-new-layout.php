<?php
/**
 *  Template Name: What's new Layout
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
    <main id="main" class="site-main">
       <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="what-new-name-holder"><h3>WHAT'S NEW</h3></div>
            </div>
            <div class="col-12">
              <div class="row">
                <div class="col-sm-12">
                  <div class="what-new-content">
                    <div class="row">
                      <?php
                      $args = array(
                        'posts_per_page' => 6,
                        'cat' => '4,5,6,7,8',
                      );
                      $q = new WP_Query( $args);
                      if ( $q->have_posts() ) {

                         while ( $q->have_posts() ) {
                          $q->the_post();
                          // $author = get_the_author();
                          $postPublished = get_the_time('F y, Y');
                          $text = apply_filters( 'the_content', strip_shortcodes( get_the_content() ) );
                          $text = str_replace(']]>', ']]&gt;', $text);
                          $excerpt_length = apply_filters( 'excerpt_length', 20 );
                          $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
                          $contentText = wp_trim_words( $text, $excerpt_length, $excerpt_more );
                          $catLink = get_the_permalink();
                          
                          $catPost = get_the_category($post->ID);
                          $catPostName ='';
                          if ( ! empty( $catPost ) ) {
                            $catPostName =  esc_html( $catPost[0]->name );
                          }
                            switch ($catPostName) {
                            case 'Parenting':
                              $catColor = 'parenting';
                              break;

                            case 'Entertainment':
                              $catColor = 'entertainment';
                              break;

                            case 'Travel':
                              $catColor = 'travel';
                              break;

                            case 'Tech':
                              $catColor = 'tech';
                              break;
                            
                            default:
                              $catColor = 'beauty';
                              break;
                          }
                          setup_postdata($post);
                          ?>
                          <div class="col-sm-12 col-md-4">
                            <div class="what-new-container">
                              <div class="image-holder">
                                <a href="<?php _e($catLink); ?>"><img src="<?php _e(get_the_post_thumbnail_url()); ?>"></a>
                              </div>
                              <div class="category-holder"><div class="<?php _e($catColor); ?>"><?php _e($catPostName); ?></div></div>
                              <div class="post-meta">
                                <span class="avatar"><i class="fa fa-user"></i> <?php _e(get_field('author_name')); ?></span>
                                <span class="post-date"><i class="fa fa-clock-o"></i> <?php _e($postPublished); ?></span>
                              </div>
                              <h4><a href="<?php _e($catLink); ?>"><?php the_title(); ?></a></h4>
                              <div class="content-holder">
                                <?php _e($contentText); ?>
                              </div>
                            </div>
                          </div>
                        <?php }
                        wp_reset_postdata(); ?>

                      <?php } else { ?>

                        <div class="col">
                          <p class="text-center">Sorry, no post/s at the moment in this category</p>
                        </div>

                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
