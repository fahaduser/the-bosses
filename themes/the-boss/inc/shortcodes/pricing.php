<?php 

function the_boss_pricing( $title, $subtitle, $limit, $order ,$orderby , $section_bg, $btn_text,$btn_url ,$tb_class ){ ?>

	<section class="section pricing-plan-section <?php echo (!empty( $tb_class )) ? esc_attr( $tb_class ) : ''; ?>" <?php if($section_bg) : ?>style="background:<?php echo esc_attr($section_bg ); ?>" <?php endif; ?> >
		<div class="container">
			<div class="row">
				<div class="section-heading">
				<h2 class="section-title"><?php echo wp_kses_post( $title ); ?></h2>
				<p class="section-content"><?php echo wp_kses_post( $subtitle ); ?></p>
			</div>
			</div>
			<div class="row">
				<div class="all-planing row">

				<?php
				$tb_pricing = new WP_Query(array(
					'post_type'			=> 'tb_pricing',
					'posts_per_page'	=> $limit,
					'order'				=> $order,
					'orderby'			=> $orderby,
					));
				 while( $tb_pricing -> have_posts()) : $tb_pricing -> the_post();

				 	$pricing_data 		= get_post_meta( get_the_ID() ,'_tb_pricing_options', true );
				 	$package_price 		= isset($pricing_data['package_price']) ? $pricing_data['package_price'] : '';
				 	$package_duration 	= isset($pricing_data['package_duration']) ? $pricing_data['package_duration'] : '';
				 	$package_service 	= isset($pricing_data['package_service']) ? $pricing_data['package_service'] : '';
				 	$package_btn 		= isset($pricing_data['package_btn']) ? $pricing_data['package_btn'] : '';
				 	$package_url 		= isset($pricing_data['package_url']) ? $pricing_data['package_url'] : '';
				  ?>
					<div class="col-sm-4 col-xs-12">
						<div class="single-pricing-box">
							<?php the_title( '<h2>','</h2>' ); ?>
							<div class="pricing-info">
								<div class="pricing-ammount">
									<h3><span class="ammount-icon">$</span><span class="ammount"><?php echo esc_html( $package_price ); ?></span></h3>
									<h4><?php echo esc_html( $package_duration ); ?></h4>
								</div>
								<div class="pricing-feature">
									<ul>
									<?php foreach( $package_service as $service) : ?>
										<li>

											<i class="<?php echo esc_attr( $service['service_icon'] ); echo ($service['service_icon'] == 'fa fa-times') ? esc_attr( ' cross-button' ) : ''; ?>" aria-hidden="true"></i>
											<span><?php echo esc_html( $service['service_text'] ); ?></span>
										</li>
									<?php endforeach; ?>

									</ul>
								</div>
								<a href="<?php echo esc_url( $package_url ); ?>" class="button"><?php echo esc_html( $package_btn ); ?></a>
							</div>
						</div>
					</div>

			<?php endwhile; wp_reset_postdata(); ?>

				</div>
			</div>
		</div>
	</section>
<?php }