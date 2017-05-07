<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Boss
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('single-blog-box search-page'); ?>>
	<div class="single-blog-box">
		<div class="blog-content">
				<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="post-meta">
					<?php the_boss_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			<div class="post-excerpt">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		</div><!-- .entry-summary -->
	</div><!-- #post-## -->
</div><!-- #post-## -->
