<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package 5pageph
 */

get_header();
  $catPost = get_the_category();
  $catPostSlug ='';
  if ( ! empty( $catPost ) ) {
    $catPostSlug =  esc_html( $catPost[0]->slug );
  }
  if ($catPostSlug === 'centerfold') {
    include_once('template-parts/centerfold-layout.php');
  } else {
    include_once('template-parts/category-layout.php');
  }
get_footer();
