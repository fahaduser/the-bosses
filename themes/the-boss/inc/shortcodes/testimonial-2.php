<?php 

function the_boss_testimonials_2( $limit, $order ,$orderby , $section_bg ){ 
	$section_bg = wp_get_attachment_url( $section_bg );
	?>

<div class="twitter-section parallax" data-dir="down" id="twitter-section" <?php if($section_bg) : ?> style="background-image:url( <?php echo esc_url( $section_bg ); ?>)" <?php endif; ?>>
	<div class="parallax-window twiter-parallax" >
			<div class="container">
				<div class="row">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php 
								$tb_testimonial = new WP_Query(array(
									'post_type'			=> 'tb_testimonial',
									'posts_per_page'	=> $limit,
									'order'				=> $order,
									'orderby'			=> $orderby,
									));
								while($tb_testimonial -> have_posts()) : $tb_testimonial -> the_post() ; 
								$testimonial_data = get_post_meta( get_the_ID(),'_tb_testimonial_options', true );
								$testimonial_desc = isset($testimonial_data['testimonial_desc']) ? $testimonial_data['testimonial_desc'] : '';
								
							?>

							<div class="swiper-slide">
								<div class="single-twit">
									<?php the_post_thumbnail( 'the-boss-testimonial-recentphoto' ); ?>
									<p><?php echo wp_kses_post( $testimonial_desc ); ?></p>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
						</div>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>				
	</div>
</div>
<?php }