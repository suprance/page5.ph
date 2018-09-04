<?php
  $menuArgs = array(
    'theme_location' => 'menu-1',
    'menu_id'        => 'primary-menu',
    'container'      => false,
    'menu_class'     => 'unified-navbar menu list-unstyled list-inline open-sub parent-nav-1',
    'depth'          => 3
  );
?>

<div class="menu-primary-container">
  <nav id="site-navigation" class="main-navigation">
    <?php wp_nav_menu( $menuArgs ); ?>
  </nav>
</div>

<!-- remove the hr -->
<hr>