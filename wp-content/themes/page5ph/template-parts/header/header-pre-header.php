<?php
  $mainLogo = (get_field('h_main_logo', 'option') ? get_field('h_main_logo', 'option')['url'] : imgfolder('no_image.png') );
  $middleLogo = (get_field('h_middle_logo', 'option') ? get_field('h_middle_logo', 'option')['url'] : imgfolder('no_image.png') );
?>
<div class="container-fluid header-pre-header">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-3">
      <div class="site-branding">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php _e($mainLogo); ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
      </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6">
      <div class="header-center-logo">
        <img src="<?php _e($middleLogo); ?>" alt="">
      </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-3 hide-sm hide-md">
      <div class="header-fb-search">
        <div class="header-fb hidden"><i class="fa fa-facebook-official" aria-hidden="true"></i><?php echo fb_like_button(); ?></div>
        <div class="search">
          <form class="searchbox">
            <input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
            <input type="submit" class="searchbox-submit">
            <span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
