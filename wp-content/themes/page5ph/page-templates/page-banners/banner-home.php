<div class="slider">
  <div class="slides default-slider">
    <?php if ($pageBanner['slider_parent_rep']) { ?>
      <?php foreach ($pageBanner['slider_parent_rep'] as $pBKey => $pBValue) { ?>
        <?php $sliderLogo = ($pBValue ? $pBValue['image']['url'] : imgfolder('no_image.png') ); ?>
      <div class="slide"><div class="image-content" style="background-image: url(<?php _e($sliderLogo); ?>);"></div></div>
      <?php } ?>
    <?php } ?>
  </div>

  <div class="controls default-preview">
    <div class="captions">
      <?php if ($pageBanner['slider_parent_rep']) {
        foreach ($pageBanner['slider_parent_rep'] as $pBKey => $pBValue) {
          $post = get_post($pBValue['slider_posts'], ARRAY_A);
          $author = get_user_by( 'ID', $post["post_author"] )->display_name;
          $text = apply_filters( 'the_content', strip_shortcodes( $post['post_content'] ) );
          $text = str_replace(']]>', ']]&gt;', $text);
          $postTitle = $post['post_title'];
          $excerpt_length = apply_filters( 'excerpt_length', 30 );
          $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
          $contentText = wp_trim_words( $text, $excerpt_length, $excerpt_more );
          $postPublished = get_the_time('F y, Y', $post->ID);
          $postLink = $post['guid'];
          $postcat = get_the_category( $post['ID'] );
          $catPostLink = get_category_link($postcat[0]->cat_ID);

          if ( ! empty( $postcat ) ) {
            $catPostName = esc_html( $postcat[0]->name );
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
          <div class="caption">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <span class="category-holder">
                    <a href="<?php _e($catPostLink); ?>" class="post-category-color-text <?php _e($catColor); ?>"><?php _e($catPostName); ?></a>
                  </span>
                  <h5><a href="<?php _e($postLink); ?>"><?php _e($postTitle); ?></a></h5>
                  <span class="post-meta">
                    <span class="avatar"><i class="fa fa-user"></i> <?php _e($author); ?></span>
                    <span class="post-date"><i class="fa fa-clock-o"></i> <?php _e($postPublished); ?></span>
                  </span>
                  <p class="post-meta-description"><?php _e($contentText); ?></p>
                  <a href="<?php _e($postLink); ?>" class="post-meta-read-more" tabindex="-1">Read More</a>
                </div>
              </div>
            </div>
          </div>
        <?php }
      } ?>
    </div>
  </div>
</div>
