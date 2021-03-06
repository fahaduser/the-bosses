<?php
/**
 * The template for displaying single project
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The_Boss
 */

get_header(); ?>

<section class="section project-single">
			<div class="container">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'service' );

		
		endwhile; // End of the loop.
		?>


			</div>

		</section>
		
<?php get_footer();
