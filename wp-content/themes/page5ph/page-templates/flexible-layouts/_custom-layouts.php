<?php
  $flexibleLayout = get_field('flexible_layout');
  $flexPadding = get_field('flexible_layout_padding');

  // OPTIONS
  $flexPadding = get_field('flexible_layout_padding');
  if( $flexPadding != 'def' ) {
    $frpd = $flexPadding;
  } else {
    $frpd = '';
  }
?>

<?php if($flexibleLayout) { ?>
  <div class="flex-holder <?php echo $frpd; ?>">
    <?php
      foreach ($flexibleLayout as $flKey => $layout) {
        switch ($layout['acf_fc_layout']) {
          case 'default_layout':
            include('row-layouts/layout-default.php');
            break;
          case 'two_column_layout':
            include('row-layouts/layout-column-two.php');
            break;
          case 'three_column_layout':
            include('row-layouts/layout-column-three.php');
            break;
          case 'flexibox_layout':
            include('row-layouts/layout-flexibox.php');
            break;
          case 'cta_layout':
            include('row-layouts/layout-cta.php');
            break;
          case 'icon_list_layout':
            include('row-layouts/layout-icon-list.php');
            break;

          case 'separator':
            include('row-layouts/separator.php');
            break;
          default:
            echo "<div class='container'><div class='row'><div class='col-12'>";
              echo '<h2>No Layout</h2>';
            echo "</div></div></div>";
            break;
        }
      }
    ?>
  </div>
<?php } ?>