<?php $pageBanner = get_field('page_banner_layout')['gp_page_banners']; ?>

<?php if($pageBanner['type'] != 'default') { ?>
  <div class="main-banner">
    <?php //var_dump(get_template_part()); ?>
    <?php
      switch ($pageBanner['type']) {
        case 'small':
          // get_template_part('page-templates/page-banners/banner-small');
          include_once(locate_template('page-templates/page-banners/banner-small.php'));
          break;

        case 'medium':
          // get_template_part('page-templates/page-banners/banner-medium');
          include_once(locate_template('page-templates/page-banners/banner-medium.php'));
          break;

        case 'large':
          // get_template_part('page-templates/page-banners/banner-large');
          include_once(locate_template('page-templates/page-banners/banner-large.php'));
          break;

        case 'search':
          // get_template_part('page-templates/page-banners/banner-search');
          include_once(locate_template('page-templates/page-banners/banner-search.php'));
          break;
      }
    ?>
  </div>
<?php } ?>