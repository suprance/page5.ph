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
  <!-- get pre header -->
  <header id="masthead" class="site-header">
    <?php include_once('template-parts/header/header-pre-header.php'); ?>

    <nav id="site-navigation" class="main-navigation">
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'page5ph' ); ?></button>
      <?php
      wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
      ) );
      ?>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

  <div id="content" class="site-content">


    this is a test