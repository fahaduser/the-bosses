<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Boss
 */

get_header(); ?>

<section class="section blog-page-two">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="blog-style-two">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<p class="archive-description">', '</p>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

						</div>

						<?php the_boss_numeric_pagination() ?>

					</div>

				<?php get_sidebar( ); ?>

				</div>

			</div>

		</section>

<?php
get_footer();
