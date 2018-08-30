<?php
  // ROW ID
  $rowID = 'row_'.get_the_ID().'_'.($flKey + 1);

  // LAYOUT
  $rowLayout = $layout['fl_flexibox_layout'];

  $rowOuterPadding = $rowLayout['gp_others_options']['paddings']['outer_padding'];
  $rowInnerPadding = $rowLayout['gp_others_options']['paddings']['inner_padding'];

  // $layoutStyle = $rowLayout['layout_style'];

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
<div id="<?php echo $rowID ?>" class="flex-layout layout-flexibox <?php echo "{$rowOuterPadding}"; ?>">
  <?php _e($layoutStart); ?>
    <div class="container">
      <div class="row cust-top">
        <?php if($rowLayout['heading']) { ?>
          <div class="col-xs-12 center">
            <h2><?php _e($rowLayout['heading']); ?></h2>
          </div>
        <?php } ?>

        <?php if($rowLayout['content_items']) { ?>
          <div class="cust-logos" id="cust-logos">
            <?php foreach ($rowLayout['content_items'] as $ciKey => $ciValue) { ?>
              <?php switch ($ciValue['box_type']) {
                case 'statement':
                  ?>
                    <a href="<?php _e($ciValue['link']); ?>">
                      <div class="cust-logo cust-logo-big">
                        <?php if($ciValue['image']) { ?>
                          <img src="<?php _e($ciValue['image']['url']); ?>" alt="<?php _e($ciValue['image']['alt']); ?>" height="78" width="150" class="logo-block-img">
                        <?php } ?>
                        
                        <?php if($ciValue['statement']['quote']){ ?>
                          <div class="squote">
                            <?php _e(apply_filters('the_content', $ciValue['statement']['quote'])); ?>
                          </div>
                        <?php } ?>

                        <div class="customer-details">
                          <?php if($ciValue['statement']['name']) { ?>
                            <div class="sname">
                              <?php _e($ciValue['statement']['name']); ?>
                            </div>
                          <?php } ?>

                          <?php if($ciValue['statement']['position']) { ?>
                            <div class="sposition">
                              <?php _e($ciValue['statement']['position']); ?>
                            </div>
                          <?php } ?>
                        </div>
                      </div>
                    </a>
                  <?php
                  break;
                
                default:
                  ?>
                    <a href="/customer/bed-and-breakfast/">
                      <div class="cust-logo">
                        <?php if($ciValue['image']) { ?>
                          <img src="<?php _e($ciValue['image']['url']); ?>" alt="<?php _e($ciValue['image']['alt']); ?>" height="78" width="150" class="logo-block-img">
                        <?php } ?>
                      </div>
                    </a>
                  <?php
                  break;
              } ?>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="clearfix" style="margin-bottom: 24px;"></div>

    <?php if($rowLayout['gp_button_group']['label']){ ?>  
      <div class="button-holder">
        <a href="<?php _e(buttonGroupUrl($rowLayout['gp_button_group'])); ?>" class="<?php _e($rowLayout['gp_button_group']['class']); ?>"><?php _e($rowLayout['gp_button_group']['label']); ?></a>
      </div>
    <?php } ?>
  <?php _e($layoutEnd); ?>
</div>