<div id="primary" class="content-area">
  <main id="main" class="site-main myCategoryLayout">
    <div class="single-category-container default">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-8">
            <?php
             while ( have_posts() ) {
              the_post();
              $author = get_the_author();
              $postPublished = get_the_time('F y, Y');

              $catPost = get_the_category();
              $catPostName ='';
              if ( !empty( $catPost ) ) {
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
              <div class="cat-single-container">
                <div class="image-holder">
                  <!-- image dimension should be 730 x 513 or more -->
                  <img src="<?php _e(get_the_post_thumbnail_url()); ?>">
                </div>
                <div class="post-meta">
                  <?php if ($catPostName != 'Happenings') { ?>
                    <span class="cat-color <?php _e($catColor); ?>"><?php _e($catPostName); ?></span>
                  <?php } ?>
                  <span class="avatar"><i class="fa fa-user"></i> <?php _e($author); ?></span>
                  <span class="post-date"><i class="fa fa-clock-o"></i> <?php _e($postPublished); ?></span>
                </div>
                <h1><?php the_title(); ?></h1>
                <div class="content-holder">
                  <?php the_content(); ?>
                </div>
              </div>
            <?php }
            wp_reset_postdata(); ?>
            <hr>

            <div class="leave-a-reply-container">
              <h3>Leave a reply</h3>
            </div>

            <div class="related-articles-container">
              <?php include_once('single/single-related-articles.php'); ?>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <?php include_once('custom-sidebar.php'); ?>
          </div>
        </div>
      </div>
    </div>

  </main><!-- #main -->
</div><!-- #primary -->