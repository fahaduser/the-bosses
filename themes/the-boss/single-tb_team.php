<?php
/**
 * The template for displaying single Team Member
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

			get_template_part( 'template-parts/content', 'team' );

		
		endwhile; // End of the loop.
		?>


			</div>

		</section>
		
<?php get_footer();
