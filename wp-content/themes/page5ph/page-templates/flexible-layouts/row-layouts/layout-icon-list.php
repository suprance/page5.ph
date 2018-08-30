<?php
  // ROW ID
  $rowID = 'row_'.get_the_ID().'_'.($flKey + 1);

  // LAYOUT
  $rowLayout = $layout['fl_icon_list_layout'];

  $rowOuterPadding = $rowLayout['gp_others_options']['paddings']['outer_padding'];
  $rowInnerPadding = $rowLayout['gp_others_options']['paddings']['inner_padding'];

  $layoutStyle = $rowLayout['layout_style'];

  $rowType = $rowLayout['gp_others_options']['type'];
  $rowColor = $rowLayout['gp_others_options']['color'];
  switch ($rowType) {
    case 'color':
      $layoutStart = "<div class='layout-background {$rowInnerPadding}' style='background-color:{$rowColor}'>";
      $layoutEnd = "</div>";
      break;
    
    default:
      $layoutStart = "";
      $layoutEnd = "";
      break;
  }
?>
<div id="<?php echo $rowID ?>" class="flex-layout layout-icon-list <?php echo "{$rowOuterPadding} {$layoutStyle}"; ?>">
  <?php _e($layoutStart); ?>
    <div class="container">
      <?php foreach ($rowLayout['icon_list'] as $ilKey => $ilValue) {?>
        <div class="col-xs-4 col-md-2">
          <img src="<?php _e($ilValue['sizes']['thumbnail']); ?>" alt="<?php _e($ilValue['title']); ?>" class="img-responsive">
        </div>
      <?php } ?>
    </div>
  <?php _e($layoutEnd); ?>
</div>