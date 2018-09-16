<div class="post-container">
  <div class="row">
    <?php if ( have_rows('related_article') ) {?>
      <div class="col-12">
        <h3>Related articles</h3>
      </div>
      <?php while ( have_rows('related_article')) {
        the_row();
        $post_object = get_sub_field('post_article', 'option');
        if ($post_object) {
          $post = $post_object;
          $text = apply_filters( 'the_content', strip_shortcodes( $post->post_content ) );
          $text = str_replace(']]>', ']]&gt;', $text);
          $excerpt_length = apply_filters( 'excerpt_length', 10 );
          $text = wp_trim_words( $text, $excerpt_length );
          $author = get_the_author();
          $postPublished = get_the_time('F y, Y');
          $title = get_the_title();

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
          setup_postdata($post); ?>

          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="post">
              <div class="image-holder">
                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
              </a>
              </div>
              <div class="text-holder">
                <div class="category-holder"><div class="<?php _e($catColor); ?>"><?php _e($catPostName); ?></div></div>
                <div class="post-meta">
                  <span class="avatar"><i class="fa fa-user"></i> <?php _e($author); ?></span>
                  <span class="post-date"><i class="fa fa-clock-o"></i> <?php _e($postPublished); ?></span>
                </div>
                <div class="title-holder-inner"><a href="<?php the_permalink(); ?>"><?php _e($title); ?></a></div>
              </div>
            </div>
          </div>
          <?php
          wp_reset_postdata();
        }
      }
    }
    ?>
  </div>
</div>