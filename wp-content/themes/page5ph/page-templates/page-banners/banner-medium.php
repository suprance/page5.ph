<?php
  // BUTTON
  $cta_button_one = $pageBanner['cta_buttons']['button_one_gp_button_group'];
  $cta_button_two = $pageBanner['cta_buttons']['button_two_gp_button_group'];


  // IMAGE
  $banner_image = ($pageBanner['main_image'] ? $pageBanner['main_image']['url'] : imgfolder('no-image.jpg') );
?>

<div class="banner-inner banner-medium">
  <div class="banner-image" style="background-image: url(<?php _e($banner_image); ?>)"></div>
  <div class="banner-content">
    <div class="cm">
      <div class="container">
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-0">
            <?php if($pageBanner['heading']) { ?>
              <h1><?php _e($pageBanner['heading']); ?></h1>
            <?php } ?>

            <?php if($pageBanner['sub_heading']) { ?>
              <p><?php _e($pageBanner['sub_heading']); ?></p>
            <?php } ?>

            <?php if($cta_button_one['label'] || $cta_button_two['label']){ ?>
              <div class="button-holder">
                <?php if($cta_button_one['label']) { ?>
                  <a href="<?php _e(buttonGroupUrl($cta_button_one)); ?>" class="btn-item <?php _e($cta_button_one['class']); ?>"><?php _e($cta_button_one['label']); ?></a>
                <?php } ?>
                <?php if($cta_button_two['label']) { ?>
                  <a href="<?php _e(buttonGroupUrl($cta_button_two)); ?>" class="btn-item <?php _e($cta_button_two['class']); ?>"><?php _e($cta_button_two['label']); ?></a>
                <?php } ?>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="cm sh"></div>
  </div>
</div>