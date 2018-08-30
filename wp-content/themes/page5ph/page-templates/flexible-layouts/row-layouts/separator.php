<?php
  // ROW ID
  $rowID = 'row_'.get_the_ID().'_'.($flKey + 1);

  // LAYOUT
  $rowLayout = $layout['type'];
  $rowOptions = $layout['gp_others_options'];

  $rowOuterPadding = $rowOptions['paddings']['outer_padding'];
  $rowInnerPadding = $rowOptions['paddings']['inner_padding'];

  switch ($rowLayout) {
    case 'full':
      $layoutStart = "";
      $layoutEnd = "";
      break;
    
    default:
      $layoutStart = "<div class='container'><div class='row'><div class='col-xs-12'>";
      $layoutEnd = "</div></div></div>";
      break;
  }
?>
<div id="<?php echo $rowID ?>" class="flex-layout separator <?php echo "{$rowOuterPadding} {$rowLayout}"; ?>">
  <?php _e($layoutStart); ?>
    <hr>
  <?php _e($layoutEnd); ?>
</div>