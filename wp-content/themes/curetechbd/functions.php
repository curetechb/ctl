<?php
/**
 * CURETECHBD functions and definitions
 *
 * @package CURETECHBD
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'curetechbd_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function curetechbd_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on CURETECHBD, use a find and replace
	 * to change 'curetechbd' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'curetechbd', get_template_directory() . '/languages' );

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
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'curetechbd' ),
		'footer' => __( 'Footer Menu', 'curetechbd' ),
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
	add_theme_support( 'custom-background', apply_filters( 'curetechbd_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // curetechbd_setup
add_action( 'after_setup_theme', 'curetechbd_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function curetechbd_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'curetechbd' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<ul class="categories">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'curetechbd_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function curetechbd_scripts() {
	wp_enqueue_style( 'curetechbd-style', get_stylesheet_uri() );

	wp_enqueue_script( 'curetechbd-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/css/owl.carousel.css', array(), false );
	wp_enqueue_style( 'settings', get_template_directory_uri() . '/css/settings.css', array(), false );
	wp_enqueue_style( 'green', get_template_directory_uri() . '/css/green.css', array(), false );
	
	wp_enqueue_script( 'modernizr-min', get_template_directory_uri() . '/js/modernizr.min.js', array(), '', false);
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true);
	wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/js/owl.carousel.js', array(), '', true);
	wp_enqueue_script( 'plugins-min', get_template_directory_uri() . '/js/plugins.min.js', array(), '', true);
	wp_enqueue_script( 'revolution', get_template_directory_uri() . '/js/revolution.min.js', array(), '', true);
	wp_enqueue_script( 'appear', get_template_directory_uri() . '/js/appear.js', array(), '', true);
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '', true);

	wp_enqueue_script( 'curetechbd-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'curetechbd_scripts' );

add_filter('use_block_editor_for_post', '__return_false');

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

add_theme_support( 'post-thumbnails' );