<?php $pageBanner = get_field('page_banner_layout')['gp_page_banners']; ?>

<?php if($pageBanner['type'] != 'default') { ?>
  <div class="main-banner">
    <?php
      switch ($pageBanner['type']) {
        case 'home':
          include_once(locate_template('page-templates/page-banners/banner-home.php'));
          break;

        default:
          include_once(locate_template('page-templates/page-banners/default.php'));
          break;
      }
    ?>
  </div>
<?php } ?>
