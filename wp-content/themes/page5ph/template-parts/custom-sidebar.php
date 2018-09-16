<?php
/**
 * The custom sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 5pageph
 */
?>
<aside id="secondary" class="widget-area default">
  <h4>Trending</h4>
  <div class="trending-container">
    <?php if ( have_rows('trending', 'option') ) {
      while ( have_rows('trending', 'option')) {
        the_row();
        $post_object = get_sub_field('trending_post', 'option');
        if ($post_object) {
          $post = $post_object;
          $text = apply_filters( 'the_content', strip_shortcodes( $post->post_content ) );
          $text = str_replace(']]>', ']]&gt;', $text);
          $excerpt_length = apply_filters( 'excerpt_length', 10 );
          $text = wp_trim_words( $text, $excerpt_length );
          $author = get_the_author();
          $postPublished = get_the_time('F y, Y');

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
          <div class="post">
            <div class="image-holder">
              <a href="<?php the_permalink(); ?>">
                <img src="<?php _e(get_the_post_thumbnail_url()); ?>">
              </a>
            </div>
            <div class="text-holder">
              <div class="trending-name-holder"><div class="<?php _e($catColor); ?>"><?php _e($catPostName); ?></div></div>
              <div class="title-holder-inner"><a href="<?php the_permalink(); ?>"><?php _e($text); ?></a></div>
              <div class="post-meta">
                <span class="avatar"><i class="fa fa-user"></i> <?php _e($author); ?></span>
                <span class="post-date"><i class="fa fa-clock-o"></i> <?php _e($postPublished); ?></span>
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
  <h4>Adverstisement</h4>
  <div class="advertisement-container">
    <?php _e(adrotate_ad(2)); ?>
  </div>
</aside><!-- #secondary -->