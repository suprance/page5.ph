<?php
if ( post_password_required() ) {
  return;
}
?>

<div id="comments" class="comments-area">

  <?php
    $comments_args = array(
        // change the title of send button 
        'label_submit'=>'Send',
        // change the title of the reply section
        'title_reply'=>'Write a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true" style="display:block;" placeholder="Comments"></textarea></p>',
      );



  // You can start editing here -- including this comment!
  if ( have_comments() ) :
    ?>
    <h2 class="comments-title">
      <?php
      $page5ph_comment_count = get_comments_number();
      if ( '1' === $page5ph_comment_count ) {
        printf(
          /* translators: 1: title. */
          esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'page5ph' ),
          '<span>' . get_the_title() . '</span>'
        );
      } else {
        printf( // WPCS: XSS OK.
          /* translators: 1: comment count number, 2: title. */
          esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $page5ph_comment_count, 'comments title', 'page5ph' ) ),
          number_format_i18n( $page5ph_comment_count ),
          '<span>' . get_the_title() . '</span>'
        );
      }
      ?>
    </h2><!-- .comments-title -->

    <?php the_comments_navigation(); ?>

    <ol class="comment-list">
      <?php
      wp_list_comments( array(
        'style'      => 'ol',
        'short_ping' => true,
      ) );
      ?>
    </ol><!-- .comment-list -->
    <?php
    the_comments_navigation();

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() ) :
      ?>
      <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'page5ph' ); ?></p>
      <?php
    endif;

  endif; // Check for have_comments().

  comment_form($comments_args);
  ?>
  this is sparta!

</div><!-- #comments -->
