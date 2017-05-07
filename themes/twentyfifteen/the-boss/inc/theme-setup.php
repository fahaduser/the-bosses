<?php 



if ( ! function_exists( 'the_boss_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_boss_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on The Boss, use a find and replace
	 * to change 'the-boss' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'the-boss', get_template_directory() . '/languages' );

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

	add_image_size( 'the-boss-portfolio-1-in', '385', '310', true );
	add_image_size( 'the-boss-portfolio-1-out', '410', '270', true );
	add_image_size( 'the-boss-portfolio-2-in', '275', '200', true );
	add_image_size( 'the-boss-team-1', '270', '270', true );
	add_image_size( 'the-boss-team-2', '370', '380', true );
	add_image_size( 'the-boss-team-3', '180', '190', true );
	add_image_size( 'the-boss-team-single', '540', '500', true );
	add_image_size( 'the-boss-partner', '220', '110', true );
	add_image_size( 'the-boss-blog', '820', '390', true );
	add_image_size( 'the-boss-latest-blog', '370', '300', true );
	add_image_size( 'the-boss-testimonial-recentphoto', '85', '85', true );
	add_image_size( 'the-boss-project', '370', '250', true );
	add_image_size( 'the-boss-offer', '120', '120', true );
	add_image_size( 'the-boss-shopping', '275', '305', true );
	add_image_size( 'the-boss-service-single', '840', '400', true );
	add_image_size( 'the-boss-project-single', '875', '515', true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'the-boss' ),
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
	add_theme_support( 'custom-background', apply_filters( 'the_boss_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'the_boss_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_boss_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_boss_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_boss_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_boss_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'the-boss' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'the-boss' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'the_boss_widgets_init' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
