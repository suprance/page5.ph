<div class="container-fluid header-pre-header">
  <div class="row">
    <div class="col">
      <div class="site-branding">
        <?php the_custom_logo();
        if ( is_front_page() && is_home() ) { ?>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php } else { ?>
          <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
          <?php }
          $page5ph_description = get_bloginfo( 'description', 'display' );
        if ( $page5ph_description || is_customize_preview() ) { ?>
          <p class="site-description"><?php echo $page5ph_description; /* WPCS: xss ok. */ ?></p>
        <?php } ?>
      </div>
    </div>
    <div class="col">
      <div class="header-center-logo">
        THE SOURCE FOR INFLUENCER BUZZ
      </div>
    </div>
    <div class="col">
      <div class="header-media-search">
        facebook and search
      </div>
    </div>
  </div>
</div>

<hr>
this is sparta!