<div class="container-fluid header-pre-header">
  <div class="row">
    <div class="col-3">
      <div class="site-branding">
        <?php the_custom_logo();
        if ( is_front_page() && is_home() ) { ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="/wp-content/uploads/2018/09/page5php_logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>
          <?php } else { ?>
          <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
          <?php } ?>
      </div>
    </div>
    <div class="col-6">
      <div class="header-center-logo">
        <img src="/wp-content/uploads/2018/09/the_source_for_influencer.png" alt="THE SOURCE FOR INFLUENCER BUZZ">
      </div>
    </div>
    <div class="col-3">
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
