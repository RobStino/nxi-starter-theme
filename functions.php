<?php
/**
 * NXI functions and definitions
 *
 * @package NXI
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'nxi_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nxi_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on NXI, use a find and replace
	 * to change 'nxi' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'nxi', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'nxi' ),
		'top-bar-menu-left' => __( 'Top Bar Menu Left', 'nxi' ),
		'top-bar-menu-right' => __( 'Top Bar Menu Right', 'nxi' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'nxi_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Create a custom image size for Site Logo.
	add_image_size( 'nxi-logo',120 );

	// Add Support for Jetpack Site Logo
	$args = array(
	    'header-text' => array(
	        'site-title',
	        'site-description',
	    ),
	    'size' => 'nxi-logo',
	);
	add_theme_support( 'site-logo', $args );
}
endif; // nxi_setup
add_action( 'after_setup_theme', 'nxi_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function nxi_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'nxi' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Area 1', 'nxi' ),
		'id'            => 'footer-area-1',
		'description'   => __( 'Widgets in this area will be shown in the first column of the Footer and on all posts and pages.', 'nxi' ),
		'before_widget' => '<aside id="footer-area-1" class="footer-area-1 widget-area" role="complementary">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="footer-widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Area 2', 'nxi' ),
		'id'            => 'footer-area-2',
		'description'   => __( 'Widgets in this area will be shown in the second column of the Footer and on all posts and pages.', 'nxi' ),
		'before_widget' => '<aside id="footer-area-2" class="footer-area-2 widget-area" role="complementary">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="footer-widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Area 3', 'nxi' ),
		'id'            => 'footer-area-3',
		'description'   => __( 'Widgets in this area will be shown in the third column of the Footer and on all posts and pages.', 'nxi' ),
		'before_widget' => '<aside id="footer-area-3" class="footer-area-3 widget-area" role="complementary">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="footer-widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Area 4', 'nxi' ),
		'id'            => 'footer-area-4',
		'description'   => __( 'Widgets in this area will be shown in the fourth column of the Footer and on all posts and pages.', 'nxi' ),
		'before_widget' => '<aside id="footer-area-4" class="footer-area-4 widget-area" role="complementary">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="footer-widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nxi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nxi_scripts() {
	wp_enqueue_style( 'nxi-style', get_stylesheet_uri() );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontawesome_css', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'screen_css', get_template_directory_uri() . '/css/stylesheets/screen.css' );

	wp_enqueue_script( 'nxi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'nxi-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'jquery_js', 'http://code.jquery.com/jquery-1.11.2.min.js', true );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'nxi_js', get_template_directory_uri() . '/js/nxi.js', array('jquery'), '', true );
	wp_enqueue_script( 'masonry_js', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'equalizer_js', get_template_directory_uri() . '/js/jquery.equalizer.min.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nxi_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Register custom navigation walker.
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

add_filter( 'show_admin_bar', '__return_false' );


