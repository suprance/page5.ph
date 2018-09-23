<?php
/**
 * 5pageph functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package 5pageph
 */

/**
 * Adding Theme Settings
 */
  if( function_exists('acf_add_options_page') ) {
    // MAIN OPTION PAGE
    $parent = acf_add_options_page(array(
      'page_title' => 'Theme Settings',
      'menu_title' => 'Theme Settings',
      'redirect' => true,
    ));
    // SUB OPTION PAGE
    acf_add_options_sub_page(array(
      'page_title' => 'Default Settings',
      'menu_title' => 'Default Settings',
      'parent_slug' => $parent['menu_slug']
    ));
  }

/**
 * REMOVE PLUGIN UPDATES
 */
  // add_action('after_setup_theme','remove_core_updates');
  // function remove_core_updates()
  // {
  // if(! current_user_can('update_core')){return;}
  // add_action('init', create_function('$a',"remove_action( 'init', 'wp_version_check' );"),2);
  // add_filter('pre_option_update_core','__return_null');
  // add_filter('pre_site_transient_update_core','__return_null');
  // }

  // remove_action('load-update-core.php','wp_update_plugins');
  // add_filter('pre_site_transient_update_plugins','__return_null');

/**
 * PRE TAG
 */
  function pre($var){
    echo '<pre>'.var_export( $var, true ).'</pre>';
  }

/**
 * REMOVE GUTENBERG
 */
  add_filter('gutenberg_can_edit_post_type', '__return_false');

/**
 * shortcut img folder
 */
function imgfolder($name){
  return get_stylesheet_directory_uri().'/images/common/'.$name;
}

// function excerpt($num, $postID) {
//     $limit = $num+1;
//     $excerpt = explode(' ', get_the_excerpt(), $limit);
//     array_pop($excerpt);
//     $excerpt = implode(" ",$excerpt)."...";
//     echo $excerpt;
// }

// function robins_get_the_excerpt($post_id) {
//   global $post;  
//   $save_post = $post;
//   $post = get_post($post_id);
//   $output = get_the_excerpt();
//   $post = $save_post;
//   return $output;
// }

/**
 * Filter the except length to 13 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
// function custom_excerpt_length( $length ) {
//   return 13;
// }
// add_filter( 'excerpt_length', 'custom_excerpt_length', 200 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '....';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


define( 'ADVANCED_ADS_AD_DEBUG_FOR_ADMIN_ONLY', true );

if ( ! function_exists( 'page5ph_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function page5ph_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on 5pageph, use a find and replace
     * to change 'page5ph' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'page5ph', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
      'menu-1' => esc_html__( 'Primary', 'page5ph' ),
      'footer-menu' => esc_html__( 'Footer menu' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'page5ph_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    ) ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support( 'custom-logo', array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    ) );
  }
endif;
add_action( 'after_setup_theme', 'page5ph_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function page5ph_content_width() {
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters( 'page5ph_content_width', 640 );
}
add_action( 'after_setup_theme', 'page5ph_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function page5ph_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'page5ph' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'page5ph' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__('Footer Newsletter Footer', 'page5ph'),
    'id'            => 'footer_newsletter_footer',
    'description'   => esc_html__( 'Add email subscribers widget here.', 'page5ph' ),
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );
}
add_action( 'widgets_init', 'page5ph_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function page5ph_scripts() {
  // list here all the css
  wp_enqueue_style( 'page5ph-style', get_template_directory_uri() . '/css/style.css', array() );
  wp_enqueue_style( 'page5ph-bootstrap', get_template_directory_uri() . '/js/bootstrap/bootstrap.css', array(), '2018' );
  wp_enqueue_style( 'page5ph-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '2018');

  // list here all the js
  wp_enqueue_script( 'page5ph-jquery', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), false );
  wp_enqueue_script( 'page5ph-main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), false );
  wp_enqueue_script( 'page5ph-popper', get_template_directory_uri() . '/js/bootstrap/popper.min.js', array('jquery'), false );
  wp_enqueue_script( 'page5ph-bootstrap-js', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', array('jquery'), false );

  // only activate in homepage
  if (is_front_page() || is_home()) {
    wp_enqueue_style( 'page5ph-slick', get_template_directory_uri() . '/css/slick.css', array(), '2018');
    wp_enqueue_style( 'page5ph-slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array(), '2018');
    wp_enqueue_script( 'page5ph-slick-js', get_template_directory_uri() . '/js/slickjs/slick.min.js', array('jquery'), false );
  }

  // only activate in happenings page
  if (is_page('happenings')) {
    wp_enqueue_style( 'page5ph-bxslider-css', get_template_directory_uri() . '/css/bxslider.css', array(), '2018' );
    wp_enqueue_script( 'page5ph-bxslider-js', get_template_directory_uri() . '/js/bxslider.min.js', array('jquery'), true );
  }

  // only activate in centerfold page
  $catPost = get_the_category();
  $catPostSlug ='';
  if ( ! empty( $catPost ) ) {
    $catPostSlug =  esc_html( $catPost[0]->slug );
  }
  if (is_page('centerfold') || $catPostSlug === 'centerfold') {
    wp_enqueue_style( 'page5ph-owlcarousel-css', get_template_directory_uri() . '/css/owl.carousel.css', array(), '2018' );
    wp_enqueue_script( 'page5ph-owlcarousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), true );
  }

}
add_action( 'wp_enqueue_scripts', 'page5ph_scripts' );

function get_current_url($strip = true) {
  // filter function
  static $filter;
  if ($filter == null) {
    $filter = function($input) use($strip) {
      $input = str_ireplace(array(
        "\0", '%00', "\x0a", '%0a', "\x1a", '%1a'), '', urldecode($input));
      $input = (!$strip ?: strip_tags($input));
      // or any encoding you use instead of utf-8
      $input = htmlspecialchars($input, ENT_QUOTES, 'utf-8');

      return trim($input);
    };
  }

  return 'http'. (($_SERVER['SERVER_PORT'] == '443') ? 's' : '') .'://'. $_SERVER['SERVER_NAME'] . $filter($_SERVER['REQUEST_URI']);
}

function get_paging_action() {
  $remove = "/page/";
  $url_string = strtok(get_current_url(),'?');
  $string_pos = strpos($url_string, $remove);
  $new_action = ($string_pos !== false ? substr($url_string, 0, $string_pos) : $url_string);
  $new_action = rtrim($new_action, '/');
  return $new_action;
}

// Custom pagination
function page5_pagination($pages = '') {

  global $paged;
  !empty($paged) ?: $paged = 1;

  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    $pages ?: 1;
  }

  $new_action = get_paging_action();

  if(1 != $pages) {
    echo '<!-- Pagination -->';
    echo '<div class="col-sm-12">';
      echo '<hr class="hidden-xs">';
      echo '<form id="pagination" class="pagination default" action="'.$_SERVER['REQUEST_URI'].'" method="post" onsubmit="paginationForm(this, \''.$new_action.'\');">';
        previous_posts_link( '<img width="12" height="10" src="'.get_template_directory_uri().'/images/common/arrow-left.png" alt="Previous Posts">' );
        echo '<input id="paged" maxlength="3" type="text" name="page" value="'.$paged.'" /> ';
        echo ' <span>';
        if ($pages > 1) { echo 'of ' . $pages; }
        echo ' page'; if ($pages > 1) { echo 's'; }
        echo '</span>';
        if ($pages > 1) {
            next_posts_link( '<img width="12" height="10" src="'.get_template_directory_uri().'/images/common/arrow-right.png" alt="Next Posts">', $pages );
        }
      echo '</form>';
    echo '</div><!-- Pagination END -->';
  }
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Include Gengo Advanced Custom Fields Settings
 */
// include_once('lib/gengo-acf.php');

/**
 * Load Jetpack compatibility file.
 */
// if ( defined( 'JETPACK__VERSION' ) ) {
//   require get_template_directory() . '/inc/jetpack.php';
// }

