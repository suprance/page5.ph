<?php
  /* Template Name: Public Translators Profile */
  get_header('unified-navbar');
    global $wp_query;

    if($wp_query->query_vars['pair_src'] && $wp_query->query_vars['pair_tgt']) {
      include locate_template('page-templates/PTPLayouts/translators-list.php');
    } elseif($wp_query->query_vars['translator_id']) {
      // include locate_template('page-templates/PTPLayouts/translators-profile.php');
      include locate_template('page-templates/PTPLayouts/translators-profile-2.php');
    } else {
      include locate_template('page-templates/PTPLayouts/language-pairs.php');
    }

    remove_filter ('the_content', 'wpautop');
    the_content();
  get_footer();
?>
