<div class="row">
  <?php query_posts('cat=10&posts_per_page=20&&offset=1');
  if ( have_posts() ) { ?>
    <div class="col-12">
      <h3>PREVIOUS ON CENTERFOLD:</h3>
    </div>
    <div class="col-12">
      <div class="owl-container">
        <div class="owl-carousel">
          <?php while ( have_posts()) {
            the_post();
            $author_image = (get_field('author_image') ? get_field('author_image') : imgfolder('no_image.png') );
            ?>

            <div>
              <a href="<?php the_permalink(); ?>">
                <img src="<?php _e($author_image); ?>" alt="<?php the_author(); ?>">
                <?php the_author(); ?>
              </a>
            </div>

          <?php
            wp_reset_postdata();
          } ?>
        </div>
      </div>
    </div>
  <?php } ?>
</div>