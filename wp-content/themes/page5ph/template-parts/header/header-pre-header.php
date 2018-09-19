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
    <div class="col-sm-12 col-md-12 col-lg-6 d-none d-md-block">
      <div class="header-center-logo">
        <img src="<?php _e($middleLogo); ?>" alt="">
      </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-3 hide-sm hide-md">
      <div class="header-fb-search">
        <div class="header-fb"><div class="fb-like" data-href="https://www.facebook.com/page5.ph" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div></div>
        <div class="search">
          <form class="searchbox" role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform search" onSubmit="return validate();">
            <input type="search" placeholder="Search......" id="s" name="s" class="searchbox-input" onkeyup="buttonUp();" value="<?php echo get_search_query() ?>">
            <input type="submit" class="searchbox-submit">
            <span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
