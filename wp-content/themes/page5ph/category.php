<?php
/**
* A Simple Category Template
*/
 
  get_header();
  $catPost = get_the_category();
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
?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main myCategoryLayout">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="cat-name-holder <?php _e($catColor); ?>"><h3><?php _e($catPostName); ?></h3></div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-8">
                <div class="cat-content">
                  <div class="row">
                    <?php if ( have_posts() ) {

                     while ( have_posts() ) {
                        the_post();
                        // $author = get_the_author();
                        $postPublished = get_the_date( get_option( 'F y, Y' ) );
                        $text = apply_filters( 'the_content', strip_shortcodes( get_the_content() ) );
                        $text = str_replace(']]>', ']]&gt;', $text);
                        $excerpt_length = apply_filters( 'excerpt_length', 20 );
                        $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
                        $contentText = wp_trim_words( $text, $excerpt_length, $excerpt_more );
                        $catLink = get_the_permalink(); ?>
                        <div class="col-sm-12 col-md-6">
                          <div class="cat-container">
                            <div class="image-holder">
                              <a href="<?php _e($catLink); ?>"><img src="<?php _e(get_the_post_thumbnail_url()); ?>"></a>
                            </div>
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
                      page5_pagination($wp_query->max_num_pages);
                      wp_reset_postdata(); ?>

                    <?php } else { ?>

                      <div class="col">
                        <p class="text-center">Sorry, no post/s at the moment in this category</p>
                      </div>

                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <?php include_once('template-parts/custom-sidebar.php'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
<?php get_footer(); ?>