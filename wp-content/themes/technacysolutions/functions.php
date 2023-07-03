<?php
if (!function_exists('technacysolutions_setup')) {
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   *
   * @return void
   * @since Technacysolutions 1.0
   *
   */
  function technacysolutions_setup()
  {
    load_theme_textdomain('technacysolutions', get_template_directory() . '/languages');

    add_theme_support('automatic-feed-links');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1568, 9999);

    register_nav_menus(array(
      'primary' => esc_html__('Primary menu', 'technacysolutions'),
    ));

    add_theme_support('html5', array(
      'gallery',
      'caption',
      'style',
      'script',
      'navigation-widgets',
    ));

    // Add support for editor styles.
    //add_theme_support('editor-styles');
    //$editor_stylesheet_path = './assets/css/style-editor.css';

    // Note, the is_IE global variable is defined by WordPress and is used
    // to detect if the current browser is internet explorer.
    global $is_IE;
    if ($is_IE) {
      $editor_stylesheet_path = './assets/css/ie-editor.css';
    }

    // Add support for responsive embedded content.
    add_theme_support('responsive-embeds');

    // Remove feed icon link from legacy RSS widget.
    add_filter('rss_widget_feed_link', '__return_empty_string');

    add_image_size( 'prj-gallery', 9999, 600, true ); // (cropped)
  }
}
add_action('after_setup_theme', 'technacysolutions_setup');

/**
 * Register widget area.
 *
 * @return void
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @since Technacysolutions 1.0
 *
 */
function technacysolutions_widgets_init()
{

  register_sidebar(array(
    'name' => esc_html__('Sidebar body', 'technacysolutions'),
    'id' => 'sidebar-1',
    'description' => esc_html__('Add widgets heres.', 'technacysolutions'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
  ));

  register_sidebar(array(
    'name' => esc_html__('Footer', 'technacysolutions'),
    'id' => 'footer-1',
    'description' => esc_html__('Add widgets here to appear in your footer.', 'technacysolutions'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
  ));
}

add_action('widgets_init', 'technacysolutions_widgets_init');

/**
 * Enqueue scripts and styles.
 *
 * @return void
 * @since Technacysolutions 1.0
 *
 */
function technacysolutions_scripts()
{
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
  wp_dequeue_style( 'global-styles' );

  // Note, the is_IE global variable is defined by WordPress and is used
  // to detect if the current browser is internet explorer.
  global $is_IE, $wp_scripts;
  if ($is_IE) {
    // If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
    wp_enqueue_style('technacysolutions-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get('Version'));
  }
  else {
    // If not IE, use the standard stylesheet.
    wp_enqueue_style('technacysolutions-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get('Version'));
  }

  // RTL styles.
  wp_style_add_data('technacysolutions-style', 'rtl', 'replace');

  // Print styles.
  wp_enqueue_style('technacysolutions-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get('Version'), 'print');

  wp_enqueue_script( 'gsap', get_template_directory_uri() . '/assets/js/gsap/minified/gsap.min.js', array( 'jquery', 'script', 'script-home' ), 1.1);
  wp_enqueue_script( 'ScrollMagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array( 'jquery', 'gsap', 'script', 'script-home' ), 1.1);
  wp_enqueue_script( 'animation-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js', array( 'jquery', 'gsap', 'ScrollMagic', 'script', 'script-home' ), 1.1);
  wp_enqueue_script( 'indicators', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array( 'jquery', 'gsap', 'ScrollMagic', 'animation-gsap', 'script', 'script-home' ), 1.1);


  wp_enqueue_script( 'paroller', get_template_directory_uri() . '/assets/js/paroller/dist/jquery.paroller.min.js', array( 'jquery', 'script', 'script-home' ), 1.1);
  wp_enqueue_script( 'jquery-inview', get_template_directory_uri() . '/assets/js/jquery-inview/jquery.inview.min.js', array( 'jquery', 'script', 'script-home' ), 1.1);

  if(is_singular('projects')){
    wp_enqueue_style('owl-style', get_template_directory_uri() . '/assets/js/OwlCarousel2/dist/assets/owl.carousel.min.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('owl-style-theme', get_template_directory_uri() . '/assets/js/OwlCarousel2/dist/assets/owl.theme.default.min.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/OwlCarousel2/dist/owl.carousel.min.js', array( 'jquery', 'script', 'script-home' ), 1.1);
  } else {
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper/swiper-bundle.min.js', array( 'jquery', 'script', 'script-home' ), 1.1);
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/js/swiper/swiper-bundle.min.css', array(), wp_get_theme()->get('Version'));
  }

  wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/index.js', array( 'jquery' ), 1.1);
  wp_enqueue_script( 'script-home', get_template_directory_uri() . '/assets/js/home.js', array( 'jquery' ), 1.1);



}

add_action('wp_enqueue_scripts', 'technacysolutions_scripts');

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';


// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';


/**
 * Calculate classes for the main <html> element.
 *
 * @return void
 * @since Technacysolutions 1.0
 *
 */
function technacysolutions_the_html_classes()
{
  /**
   * Filters the classes for the main <html> element.
   *
   * @param string The list of classes. Default empty string.
   * @since Technacysolutions 1.0
   *
   */
  $classes = apply_filters('technacysolutions_html_classes', '');
  if (!$classes) {
    return;
  }
  echo 'class="' . esc_attr($classes) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @return void
 * @since Technacysolutions 1.0
 *
 */
function technacysolutions_add_ie_class()
{
  ?>
  <script>
    if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {
      document.body.classList.add('is-IE');
    }
  </script>
  <?php
}

add_action('wp_footer', 'technacysolutions_add_ie_class');

if (!function_exists('wp_get_list_item_separator')) :
  /**
   * Retrieves the list item separator based on the locale.
   *
   * Added for backward compatibility to support pre-6.0.0 WordPress versions.
   *
   * @since 6.0.0
   */
  function wp_get_list_item_separator()
  {
    /* translators: Used between list items, there is a space after the comma. */
    return __(', ', 'technacysolutions');
  }
endif;

add_action( 'init', 'smartwp_disable_emojis' );

function smartwp_disable_emojis() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}

function disable_emojis_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_author()) {
    $title = '<span class="vcard">' . get_the_author() . '</span>';
  } elseif (is_tax()) { //for custom post types
    $title = sprintf(__('%1$s'), single_term_title('', false));
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  }
  return $title;
});
