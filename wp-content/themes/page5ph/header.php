<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 5pageph
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <!-- get advertisement -->
  <?php include_once('template-parts/header/header-adver.php'); ?>
  <header id="masthead" class="site-header">
    <!-- get pre header -->
    <?php include_once('template-parts/header/header-pre-header.php'); ?>
    <!-- get header menu -->
    <?php include_once('template-parts/header/header-menu.php'); ?>
  </header><!-- #masthead -->

  <div id="content" class="site-content">
    <!-- get header banner -->
    <?php include_once('template-parts/header/header-banner.php'); ?>
