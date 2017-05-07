<?php
/**
 * The Boss functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package the-boss
 * @author LabArtisan
 */


/**
 * Enqueue scripts and styles.
 */
function the_boss_scripts() {
	// The Boss Stylesheet Enqueue
	wp_enqueue_style( 'the-boss-style', get_stylesheet_uri() );
	wp_enqueue_style( 'normalize', THEBOSS_ASSETS . '/css/normalize.css', false, '3.0.3', 'all' );
	wp_enqueue_style( 'main', THEBOSS_ASSETS . '/css/main.css', false, '5.3.0', 'all' );
	wp_enqueue_style( 'bootstrap', THEBOSS_ASSETS . '/css/bootstrap.min.css', false, '3.3.7', 'all' );
	wp_enqueue_style( 'flaticon', THEBOSS_ASSETS . '/font/flaticon.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'font-awesome', THEBOSS_ASSETS . '/css/font-awesome.min.css', false, '4.6.3', 'all' );
	wp_enqueue_style( 'camera', THEBOSS_ASSETS . '/css/camera.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'animate', THEBOSS_ASSETS . '/css/animate.css', false, '3.5.1', 'all' );
	wp_enqueue_style( 'fancybox', THEBOSS_ASSETS . '/css/jquery.fancybox.css', false, '2.1.5', 'all' );
	wp_enqueue_style( 'swiper', THEBOSS_ASSETS . '/css/swiper.min.css', false, '3.4.0', 'all' );
	wp_enqueue_style( 'nstSlider', THEBOSS_ASSETS . '/css/jquery.nstSlider.css', false, '1.0.13', 'all' );
	wp_enqueue_style( 'flexslider', THEBOSS_ASSETS . '/css/flexslider.css', false, '2.6.2', 'all' );
	wp_enqueue_style( 'style', THEBOSS_ASSETS . '/css/style.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'responsive', THEBOSS_ASSETS . '/css/responsive.css', false, '1.0.0', 'all' );

	// The Boss JS Enqueue
	wp_enqueue_script( 'modernizr', THEBOSS_ASSETS . '/js/vendor/modernizr.min.js', array( 'jquery' ), '2.8.3', false );
	wp_enqueue_script( 'bootstrap', THEBOSS_ASSETS . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );
	wp_enqueue_script( 'simpleparallax', THEBOSS_ASSETS . '/js/simpleparallax.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'jquery-easing', THEBOSS_ASSETS . '/js/jquery.easing.min.js', array( 'jquery' ), '1.3.0', true );
	wp_enqueue_script( 'camera', THEBOSS_ASSETS . '/js/camera.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'waypoints', THEBOSS_ASSETS . '/js/waypoints.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_script( 'countup', THEBOSS_ASSETS . '/js/jquery.countup.js', array( 'jquery' ), '1.0.3', true );
	wp_enqueue_script( 'fancybox', THEBOSS_ASSETS . '/js/jquery.fancybox.js', array( 'jquery' ), '2.1.5', true );
	wp_enqueue_script( 'swiper', THEBOSS_ASSETS . '/js/swiper.min.js', array( 'jquery' ), '3.4.0', true );
	wp_enqueue_script( 'easypiechart', THEBOSS_ASSETS . '/js/jquery.easypiechart.js', array( 'jquery' ), '2.1.1', true );
	wp_enqueue_script( 'gmap-api', 'http://maps.google.com/maps/api/js?sensor=false' );
	wp_enqueue_script( 'gmap', THEBOSS_ASSETS . '/js/gmap3.min.js', array( 'jquery' ), '6.0.0', true );
	wp_enqueue_script( 'flexslider', THEBOSS_ASSETS . '/js/jquery.flexslider.js', array( 'jquery' ), '2.6.2', true );
	wp_enqueue_script( 'nstSlider', THEBOSS_ASSETS . '/js/jquery.nstSlider.min.js', array( 'jquery' ), '1.0.13', true );
	wp_enqueue_script( 'scrollSpeed', THEBOSS_ASSETS . '/js/jQuery.scrollSpeed.js', array( 'jquery' ), '1.0.2', true );
	wp_enqueue_script( 'plugins', THEBOSS_ASSETS . '/js/plugins.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'main', THEBOSS_ASSETS . '/js/main.js', array( 'jquery' ), '1.0.0', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_boss_scripts', 90 );