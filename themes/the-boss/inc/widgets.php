<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_boss_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'the-boss' ),
		'id'            => 'right_sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'the-boss' ),
		'before_widget' => '<div id="%1$s" class="single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area', 'the-boss' ),
		'id'            => 'footer_widgets',
		'description'   => esc_html__( 'Add widgets here.', 'the-boss' ),
		'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 %2$s"><div class="f-widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Newsletter', 'the-boss' ),
		'id'            => 'newsletter-widgets',
		'description'   => esc_html__( 'Add widgets here.', 'the-boss' ),
		'before_widget' => '<div class="newsletter-section-box %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'the_boss_widgets_init' );