<?php
  $menuArgs = array(
    'theme_location' => 'unified-navbar-primary',
    'menu_id' => 'unified-navbar-menu',
    'container' => false,
    'menu_class' => 'unified-navbar menu list-unstyled list-inline open-sub parent-nav-1',
    'depth' => 3
  );
?>
<nav class="unified-navigation">
  <aside class="sidepanel hidden-md hidden-lg">
    <div id="mobile-language-select" class="hidden-md hidden-sm">
      <?php
        if (is_search()) { echo do_shortcode('[en_menu_only_desktop]'); }
        else { echo gengo_languages_select_menu_mobile('', 1); }
      ?>
    </div>
    <?php wp_nav_menu( $menuArgs ); ?>
  </aside>
  <div class="container">
    <div class="row">
      <div class="col-xs-4 col-md-1 cmid">
        <div class="main-logo">
          <?php if(is_page_template('page-resources.php') || is_search() || is_singular('resource')) : ?>
            <a href="<?php echo home_url( my_home_url().'translators/resources/' ); ?>">
              <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/common/gengo-logo@2x.png">
            </a>
          <?php else : ?>
            <a href="<?php echo my_home_url(); ?>">
              <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/common/<?php if(is_page('translator-achievements')){echo 'gengo_logo_green@2x.png';}else{echo 'gengo-logo@2x.png';} ?> ">
            </a>
          <?php endif;?>
        </div>
      </div>
      <div class="col-xs-8 cmid">
        <div class="desktop-menu hidden-xs hidden-sm">
          <?php wp_nav_menu( $menuArgs ); ?>
        </div>
        <div class="mobile-menu hidden-md hidden-lg">
          <div class="sign-in-holder cmid">
            <a class="btn-sign-in" style="<?php if( is_page('translator-achievements')) echo 'display: none'; ?>" href="<?php echo do_shortcode( '[my_app_url type=signin]' ); ?>">
              <?php _e( 'SIGN IN', 'gengo'); ?>
            </a>
          </div>
          <div class="mobile-language-dropdown cmid">
            <?php
              if (is_search()) { echo do_shortcode('[en_menu_only_desktop]'); }
              else { echo gengo_languages_list_menu('', 1); }
            ?>
          </div>
          <div class="mobile-menu-trigger cmid">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <div class="hidden-xs hidden-sm col-md-3 cmid">
        <div class="desktop-menu-additional <?php echo ICL_LANGUAGE_CODE; ?>">
          <div class="sign-in-holder cmid">
            <a class="btn-sign-in" style="<?php if( is_page('translator-achievements')) echo 'display: none'; ?>" href="<?php echo do_shortcode( '[my_app_url type=signin]' ); ?>">
              <?php _e( 'SIGN IN', 'gengo'); ?>
            </a>
          </div>
          <div class="mobile-language-dropdown cmid">
            <?php
              if (is_search()) { echo do_shortcode('[en_menu_only_desktop]'); }
              else { echo gengo_languages_list_menu('', 1); }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>