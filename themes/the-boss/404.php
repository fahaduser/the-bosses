<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package The_Boss
 */

get_header(); ?>

		<section class="section">
			<div class="container">
				<div class="page-not-found">
					<h1><?php echo esc_html__( '404', 'the-boss' ); ?></h1>
					<h2> <?php echo esc_html__( 'Oops, This Page Not Be Found! ' , 'the-boss'); ?></h2>
					<h3><?php echo esc_html__('We are really sorry but the page you requested is missing','the-boss' ); ?></h3>
					<a href="<?php echo esc_url( home_url( ) ); ?>" class="button"><?php echo esc_html__('Go Back Home','the-boss' ); ?></a>
				</div>
			</div>
		</section>

<?php
get_footer();
