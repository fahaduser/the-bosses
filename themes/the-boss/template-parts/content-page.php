<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Boss
 */

?>
<?php if(is_page('checkout')) : ?>
<section class="section shop-page-one">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-boss' ),
								'after'  => '</div>',
							) );
						?>
					<?php if ( get_edit_post_link() ) : ?>
						<footer class="entry-footer">
							<?php
								edit_post_link(
									sprintf(
										/* translators: %s: Name of current post */
										esc_html__( 'Edit %s', 'the-boss' ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
									),
									'<span class="edit-link">',
									'</span>'
								);
							?>
						</footer><!-- .entry-footer -->
					<?php endif; ?>
				</article><!-- #post-## -->
			</div>
		</div>
	</div>
</section>
<?php else:  ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-boss' ),
						'after'  => '</div>',
					) );
				?>
			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
						edit_post_link(
							sprintf(
								/* translators: %s: Name of current post */
								esc_html__( 'Edit %s', 'the-boss' ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							),
							'<span class="edit-link">',
							'</span>'
						);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
		</article><!-- #post-## -->	
<?php endif; ?>
