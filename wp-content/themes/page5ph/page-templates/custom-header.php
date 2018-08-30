<?php
/*
Template Name: Custom Header Template
*/

get_header('unified-navbar');

  while ( have_posts() ) : the_post();

  remove_filter ('the_content', 'wpautop');
  the_content();

endwhile;

// end of the loop.
get_footer();
