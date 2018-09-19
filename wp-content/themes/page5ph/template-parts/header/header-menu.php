<?php
  $menuArgs = array(
    'theme_location' => 'menu-1',
    'menu_id'        => 'primary-menu',
    'container'      => false,
    'menu_class'     => 'unified-navbar menu list-unstyled list-inline open-sub parent-nav-1',
    'depth'          => 3
  );

  $mainLogo = (get_field('f_main_logo', 'option') ? get_field('f_main_logo', 'option')['url'] : imgfolder('no_image.png') );
  $middleLogo = (get_field('h_middle_logo', 'option') ? get_field('h_middle_logo', 'option')['url'] : imgfolder('no_image.png') );

?>

<div class="menu-primary-container">
  <div class="menu-site-branding">
    <div class="site-branding desktop d-none d-md-block">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php _e($mainLogo); ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
    </div>
  </div>
  <div class="site-branding mobile d-sm-block d-md-none">
    <div class="mobile-image"></div>
  </div>
  <div class="hide-sm hide-md">
    <nav id="site-navigation" class="main-navigation">
      <?php wp_nav_menu( $menuArgs ); ?>
    </nav>
  </div>
  <div class="visible-sm visible-md">
    <nav id="site-navigation" class="main-navigation mobile-button">
      <aside class="wholepanel">
        <?php wp_nav_menu( $menuArgs ); ?>
      </aside>
      <div class="mobile-menu-trigger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
  </div>
</div>
