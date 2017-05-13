<?php 

function the_boss_portfolio_1( $title, $subtitle, $limit, $order ,$orderby , $section_bg, $btn_text,$btn_url ,$tb_class ){ ?>
<section class="portfolio-section section <?php echo (!empty( $tb_class )) ? esc_attr( $tb_class ) : ''; ?>" <?php if($section_bg) : ?>style="background:<?php echo esc_attr($section_bg ); ?>" <?php endif; ?>>
	<div class="container">
		<div class="row">
			<div class="section-heading">
				<h2 class="section-title"><?php echo wp_kses_post( $title ); ?></h2>
				<p class="section-content"><?php echo wp_kses_post( $subtitle ); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="portfolio-item">
				<?php 
				$tb_portfolio = new WP_Query(array(
					'post_type'				=> 'tb_portfolio',
					'posts_per_page'		=> $limit,
					'order'					=> $order,
					'orderby'				=> $orderby,
					));
				while( $tb_portfolio -> have_posts()) :  $tb_portfolio -> the_post(); 
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
				<?php endwhile; wp_reset_postdata(); ?>
				<div class="clear-fix"></div>
			</div>
			<?php if($btn_text) : ?>
				<a href="<?php echo esc_url( $btn_url ); ?>" class="button"><?php echo wp_kses_post( $btn_text ); ?></a>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php }