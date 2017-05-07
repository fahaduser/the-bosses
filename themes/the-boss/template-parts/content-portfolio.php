<?php
/**
 * Template part for displaying all portfolios
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Boss
 */
$portfolio_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID() ), 'full' );
?>
<div class="col-sm-4">
	<div class="row">
		<div class="single-portfolio">
			<div class="single-portfolio-inner">
				<?php the_post_thumbnail('the-boss-portfolio-1-in' ); ?>
				<div class="round-overlay"></div>
				<a class="fancybox" href="<?php echo esc_url($portfolio_thumb[0] ); ?>">
					<div class="light-box-icon">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</div>
				</a>									
			</div>
		</div>								
	</div>
</div>

						
					