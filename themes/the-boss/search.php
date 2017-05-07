<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<h1 class="page-title screen-reader-text"><?php printf( esc_html__( 'Search Results for : %s', 'the-boss' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
?>
