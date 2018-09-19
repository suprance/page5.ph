<?php
  // ROW ID
  $rowID = 'row_'.get_the_ID().'_'.($flKey + 1);

  // LAYOUT
  $rowLayout = $layout['fl_default_layout'];

  $rowOuterPadding = $rowLayout['gp_others_options']['paddings']['outer_padding'];
  $rowInnerPadding = $rowLayout['gp_others_options']['paddings']['inner_padding'];

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
<div id="<?php echo $rowID ?>" class="flex-layout layout-default <?php echo "{$rowOuterPadding}"; ?>">
  <?php _e($layoutStart); ?>
    <div class="container">
      <?php if($rowLayout['content']){ ?>
        <div class="row">
          <div class="col-12">
            <?php _e(apply_filters('the_content', $rowLayout['content'])); ?>
          </div>
        </div>
      <?php } ?>
    </div>
  <?php _e($layoutEnd); ?>
</div>