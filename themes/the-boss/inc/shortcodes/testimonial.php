<?php 

function the_boss_testimonials( $title, $subtitle, $limit, $order ,$orderby , $section_bg, $btn_text,$btn_url ,$tb_class ){ ?>

<section class="section testimonial-section-two <?php echo (!empty( $tb_class )) ? esc_attr( $tb_class ) : ''; ?>" <?php if($section_bg) : ?>style="background:<?php echo esc_attr($section_bg ); ?>" <?php endif; ?>>
			<div class="container">
				<div class="row">
					<div class="section-heading">
				<h2 class="section-title"><?php echo wp_kses_post( $title ); ?></h2>
				<p class="section-content"><?php echo wp_kses_post( $subtitle ); ?></p>
			</div>
				</div>
				<div class="row">
					<div class="testimonial-parents" id="testmimonial-big">
						<div class="swiper-wrapper">

						<?php 
							$tb_testimonial = new WP_Query(array(
								'post_type'		=> 'tb_testimonial'
								));
							while($tb_testimonial -> have_posts()) : $tb_testimonial -> the_post() ; 
							$testimonial_data = get_post_meta( get_the_ID(),'_tb_testimonial_options', true );
							$testimonial_desc = isset($testimonial_data['testimonial_desc']) ? $testimonial_data['testimonial_desc'] : '';
							$testimonial_subtitle = isset($testimonial_data['testimonial_subtitle']) ? $testimonial_data['testimonial_subtitle'] : '';
							?>
							<div class="swiper-slide">						
								<div class="testimonial-box">
									<div class="single-testimonial">
										<div class="testimonial-content">
											<div class="testimonial-inner">
												<p><?php echo wp_kses_post( $testimonial_desc ); ?></p>
											</div>									
										</div>
									</div>
									<div class="testimonial-author">
										<div class="testimonial-author-pic">
											<?php the_post_thumbnail( 'the-boss-testimonial-recentphoto' ); ?>
										</div>
										<div class="testimonial-author-info">
											<?php the_title( '<h3>','</h3>' ); ?>
											<span><?php echo esc_html( $testimonial_subtitle ); ?></span>
										</div>
									</div>							
								</div>
							</div>

						<?php endwhile; ?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
<?php }