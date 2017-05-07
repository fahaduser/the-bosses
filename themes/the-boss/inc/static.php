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
    wp_enqueue_style( 'normalize', THE_BOSS . '/css/normalize.css', false, '3.0.3', 'all' );
    wp_enqueue_style( 'main', THE_BOSS . '/css/main.css', false, '5.3.0', 'all' );
    wp_enqueue_style( 'bootstrap', THE_BOSS . '/css/bootstrap.min.css', false, '3.3.7', 'all' );
    wp_enqueue_style( 'flaticon', THE_BOSS . '/font/flaticon.css', false, '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome', THE_BOSS . '/css/font-awesome.min.css', false, '4.6.3', 'all' );
    wp_enqueue_style( 'camera', THE_BOSS . '/css/camera.css', false, '1.0.0', 'all' );
    wp_enqueue_style( 'animate', THE_BOSS . '/css/animate.css', false, '3.5.1', 'all' );
    wp_enqueue_style( 'fancybox', THE_BOSS . '/css/jquery.fancybox.css', false, '2.1.5', 'all' );
    wp_enqueue_style( 'swiper', THE_BOSS . '/css/swiper.min.css', false, '3.4.0', 'all' );
    wp_enqueue_style( 'nstSlider', THE_BOSS . '/css/jquery.nstSlider.css', false, '1.0.13', 'all' );
    wp_enqueue_style( 'flexslider', THE_BOSS . '/css/flexslider.css', false, '2.6.2', 'all' );
    wp_enqueue_style( 'style', THE_BOSS . '/css/style.css', false, '1.0.0', 'all' );
    wp_enqueue_style( 'responsive', THE_BOSS . '/css/responsive.css', false, '1.0.0', 'all' );

    // The Boss JS Enqueue
    wp_enqueue_script( 'modernizr', THE_BOSS . '/js/vendor/modernizr.min.js', array( 'jquery' ), '2.8.3', false );
    wp_enqueue_script( 'bootstrap', THE_BOSS . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );
    wp_enqueue_script( 'simpleparallax', THE_BOSS . '/js/simpleparallax.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'jquery-easing', THE_BOSS . '/js/jquery.easing.min.js', array( 'jquery' ), '1.3.0', true );
    wp_enqueue_script( 'camera', THE_BOSS . '/js/camera.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'waypoints', THE_BOSS . '/js/waypoints.min.js', array( 'jquery' ), '4.0.0', true );
    wp_enqueue_script( 'countup', THE_BOSS . '/js/jquery.countup.js', array( 'jquery' ), '1.0.3', true );
    wp_enqueue_script( 'fancybox', THE_BOSS . '/js/jquery.fancybox.js', array( 'jquery' ), '2.1.5', true );
    wp_enqueue_script( 'swiper', THE_BOSS . '/js/swiper.min.js', array( 'jquery' ), '3.4.0', true );
    wp_enqueue_script( 'easypiechart', THE_BOSS . '/js/jquery.easypiechart.js', array( 'jquery' ), '2.1.1', true );
    wp_enqueue_script( 'gmap-api', 'http://maps.google.com/maps/api/js?sensor=false' );
    wp_enqueue_script( 'gmap', THE_BOSS . '/js/gmap3.min.js', array( 'jquery' ), '6.0.0', true );
    wp_enqueue_script( 'flexslider', THE_BOSS . '/js/jquery.flexslider.js', array( 'jquery' ), '2.6.2', true );
    wp_enqueue_script( 'nstSlider', THE_BOSS . '/js/jquery.nstSlider.min.js', array( 'jquery' ), '1.0.13', true );
    wp_enqueue_script( 'scrollSpeed', THE_BOSS . '/js/jQuery.scrollSpeed.js', array( 'jquery' ), '1.0.2', true );
    wp_enqueue_script( 'plugins', THE_BOSS . '/js/plugins.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'main', THE_BOSS . '/js/main.js', array( 'jquery' ), '1.0.0', true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'the_boss_scripts', 90 );