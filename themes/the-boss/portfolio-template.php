<?php
/**
 * The template for displaying portfolio pages
 * Template Name: Portfolio Template
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Boss
 */

get_header(); ?>

	<div class="section portfolio-page-one">
		<div class="container">
			<div class="row">
				<div class="portfolio-item">
				<?php
				$tb_portfolio = new WP_Query(array(
					'post_type'				=> 'tb_portfolio',
					'posts_per_page'		=> -1,
					));
				while( $tb_portfolio -> have_posts()) :  $tb_portfolio -> the_post(); 
				

					get_template_part( 'template-parts/content', 'portfolio' );

					// If comments are open or we have at least one comment, load up the comment template.

				endwhile; // End of the loop.
				?>
				</div>
			</div>			
		</div>
	</div>

<?php
get_footer();
