<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 5pageph
 */

?>
<div class="col-sm-12 col-md-6">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
      <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

      <?php if ( 'post' === get_post_type() ) : ?>
      <div class="entry-meta">
        <span class="posted-on">Posted on <?php _e(get_the_time('F y, Y')); ?> by <?php the_author(); ?></span>
      </div><!-- .entry-meta -->
      <?php endif; ?>
    </header><!-- .entry-header -->

    <?php page5ph_post_thumbnail();
    $text = apply_filters( 'the_content', strip_shortcodes( get_the_content() ) );
    $text = str_replace(']]>', ']]&gt;', $text);
    $excerpt_length = apply_filters( 'excerpt_length', 20 );
    $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
    $contentText = wp_trim_words( $text, $excerpt_length, $excerpt_more );
    ?>

    <div class="entry-summary">
      <?php _e($contentText); ?>
    </div><!-- .entry-summary -->
  </article><!-- #post-<?php the_ID(); ?> -->
</div>
