<?php
  // ROW ID
  $rowID = 'row_'.get_the_ID().'_'.($flKey + 1);

  // LAYOUT
  $rowLayout = $layout['fl_three_column_layout'];

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

  // pre($rowLayout);
?>
<div id="<?php echo $rowID ?>" class="flex-layout layout-column-three <?php echo "{$rowOuterPadding} {$layoutStyle}"; ?>">
  <?php _e($layoutStart); ?>
    <div class="container">
      <?php if($rowLayout['column_items']){ ?>
        <div class="row">
          <?php foreach ($rowLayout['column_items'] as $ciKeys => $ciValues) { ?>
            <div class="col-xs-12 col-sm-4 col-items">
              <?php if($ciValues['image']){ ?>
                <div class="image-holder">
                  <div class="image-item" style="background-image: url(<?php _e($ciValues['image']['url']); ?>)"></div>
                </div>
              <?php } ?>

              <?php if($ciValues['heading']){ ?>
                <div class="heading-holder"><?php _e($ciValues['heading']); ?></div>
              <?php } ?>

              <?php if($ciValues['content']) { ?>
                <div class="content-holder"><?php _e(apply_filters('the_content', $ciValues['content'])); ?></div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
      <?php //pre($rowLayout); ?>
    </div>
  <?php _e($layoutEnd); ?>
</div>