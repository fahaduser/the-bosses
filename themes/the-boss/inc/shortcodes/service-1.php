<?php 

function the_boss_service_1( $title, $subtitle, $limit, $order ,$orderby , $section_bg, $btn_text,$btn_url ,$tb_class ){ ?>

<section class="offer-section section" <?php if($section_bg) : ?>style="background:<?php echo esc_attr($section_bg ); ?>" <?php endif; ?> >
			<div class="container">
				<div class="row">
					<div class="section-heading">
						<h2 class="section-title"><?php echo esc_html( $title ); ?></h2>
						<p class="section-content"><?php echo esc_html( $subtitle ); ?></p>
					</div>
				</div>
				<div class="row">
					<div class="ofer-items">

						<?php 
							$tb_project = new WP_Query(array(
								'post_type'			=> 'tb_service',
								'posts_per_page'	=> $limit,
								'order'				=> $order,
								'orderby'			=> $orderby,
								));
							while( $tb_project -> have_posts()) :  $tb_project -> the_post(); 
							$service = get_post_meta(get_the_ID(),'_tb_service_options', true );
							$service_desc = isset($service['service_desc']) ? $service['service_desc'] : '' ;
							$service_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'full' );

						?>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-offer-item row">
								<?php if( $service_image[0] ) : ?>
									<div class="offer-icon">
										<div class="offer-icon-animate">
											<img src="<?php echo esc_url( $service_image[0] ); ?>" alt="" />
										</div>
									</div>
								<?php endif; ?>
								<div class="offer-details">
									<?php the_title( '<h3>','</h3>' ); ?>
									<p><?php echo wp_trim_words( $service_desc , 15 , false ); ?></p>
									<a href="<?php esc_url( the_permalink() ); ?>" class="read-more"><?php echo esc_html__( 'read more' , 'the-boss' ); ?><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<?php endwhile; wp_reset_postdata(); ?>
						<div class="clear-fix"></div>

					</div>
				</div>
			</div>
		</section>

<?php }