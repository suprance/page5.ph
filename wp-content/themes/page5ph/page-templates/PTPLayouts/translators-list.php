<?php
  $url = $_SERVER['REQUEST_URI'];
  $stripUrl = explode('page/', $url)[1];
  $afterStr = strstr($stripUrl, '/');
  $pageNumber = strstr($stripUrl, '/', true);

  if($stripUrl) {
    $pageLayout = ($afterStr == '/') ? $pageNumber : false;
  } else {
    $pageLayout = 1;
  }
?>

<?php if($pageLayout) { ?>
  <div class="translators-main-page" data-lsource="<?php _e($wp_query->query['pair_src']) ?>" data-ltarget="<?php _e($wp_query->query['pair_tgt']) ?>" data-lpage="<?php _e($pageLayout); ?>">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="row pair-translators">
          </div>
        </div>
        <div class="col-xs-12">
          <div class="pagination hidden">
            <div class="pdiv pages">
              <span><input class="form control page-counter" name="page" value="<?php _e($pageLayout); ?>"></span>
              <span class="max-page"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
