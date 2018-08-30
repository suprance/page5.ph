<?php
  // ROW ID
  $rowID = 'row_'.get_the_ID().'_'.($flKey + 1);

  // LAYOUT
  $rowLayout = $layout['fl_two_column_layout'];

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

  // WARNING CUSTOMIZED CLASS LAYOUT
  $rowCustomClass = $rowLayout['gp_others_options']['custom_class'];

  // ICON POSITION
  $iconPosition = $rowLayout['icon_position'];
  $icon = $rowLayout['icon'];

?>
<div id="<?php echo $rowID ?>" class="flex-layout layout-column-two <?php echo "{$rowOuterPadding} {$layoutStyle} {$rowCustomClass}"; ?>">
  <?php _e($layoutStart); ?>
    <div class="container">
      <?php
        switch ($layoutStyle) {
          case 'cta':
            ?>
              <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                  <?php if($rowLayout['heading']){ ?>
                    <div class="heading text-<?php _e($rowLayout['text_alignment']); ?>"><?php _e($rowLayout['heading']); ?></div>
                  <?php } ?>
                  <?php if($rowLayout['gp_button_group']['label']){ ?>
                    <div class="button-holder">
                      <a href="<?php _e(buttonGroupUrl($rowLayout['gp_button_group'])); ?>" class="<?php _e($rowLayout['gp_button_group']['class']); ?>"><?php _e($rowLayout['gp_button_group']['label']); ?></a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            <?php
            break;
          case 'icon_content':
            $imageUrl = ($icon ? $icon['url'] : imgfolder('no-image.jpg'));

            if($iconPosition == 'right') {
              $imageLeftClass = "col-xs-12 visible-xs image-holder image-left";
              $imageRightClass = "hidden-xs col-sm-3 col-md-2 image-holder image-right";
              $contentClass = "col-xs-12 col-sm-9 col-md-10 content-holders";
            } else {
              $imageLeftClass = "col-xs-12 col-sm-3 col-lg-2 image-holder image-left";
              $imageRightClass = "hidden image-holder image-right";
              $contentClass = "col-xs-12 col-sm-9 col-lg-10 content-holders";
            }
            ?>
              <div class="row">
                <?php if($imageUrl) { ?>
                  <div class="<?php _e($imageLeftClass); ?>">
                    <div class="image-item" style="background-image: url(<?php _e($imageUrl) ?>)"></div>
                  </div>
                <?php } ?>

                <?php if($rowLayout['col1_content']){ ?>
                  <div class="<?php _e($contentClass); ?>"><?php _e(apply_filters('the_content', $rowLayout['col1_content'])); ?></div>
                <?php } ?>

                <?php if($imageUrl) { ?>
                  <div class="<?php _e($imageRightClass); ?>">
                    <div class="image-item" style="background-image: url(<?php _e($imageUrl) ?>)"></div>
                  </div>
                <?php } ?>
              </div>
            <?php
            break;
          
          default:
            if($rowLayout['heading']) { ?>
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading text-<?php _e($rowLayout['text_alignment']); ?>"><?php _e($rowLayout['heading']); ?></div>
                </div>
              </div>
            <?php } ?>

            <?php if($rowLayout['col1_content'] || $rowLayout['col2_content']) { ?>
              <div class="row">
                <div class="content-holders">
                  <?php if($rowLayout['col1_content']) { ?>
                    <div class="col-xs-12 col-md-6 column-left">
                      <?php _e(apply_filters('the_content', $rowLayout['col1_content'])); ?>
                    </div>
                  <?php } ?>
                  <?php if($rowLayout['col2_content']) { ?>
                    <div class="col-xs-12 col-md-6 column-right">
                      <?php _e(apply_filters('the_content', $rowLayout['col2_content'])); ?>
                    </div>
                  <?php } ?>
                </div>
              </div>
            <?php }
            break;
        }
      ?>
    </div>
  <?php _e($layoutEnd); ?>
</div>
