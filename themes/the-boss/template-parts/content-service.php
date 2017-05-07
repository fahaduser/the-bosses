<?php
/**
 * Template part for displaying single projects
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Boss
 */
$projects_data 		= '';

if(function_exists('cs_get_option')) :
	$services_data 				= get_post_meta( get_the_ID() , '_tb_service_options', true );
	$service_desc 				= isset($services_data['service_desc']) ? $services_data['service_desc'] : '';
	$service_download 			= isset($services_data['service_download']) ? $services_data['service_download'] : '';
	$service_question_answer 	= isset($services_data['service_question_answer']) ? $services_data['service_question_answer'] : '';
endif;
?><section class="section service-single-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9 pull-right overflow-hidden">
						<div class="content">
							<div class="content-large-image">
								<?php the_post_thumbnail( 'the-boss-service-single' ); ?>
							</div>
							<div class="single-services-content">
								<?php the_title('<h3>','</h3>' ); ?>
							</div>
							<div class="single-services-content">
								<?php echo wp_kses_post( $service_desc ); ?>
							</div>
							<div class="single-services-content">
								<h3> <?php echo esc_html__( 'Frequently Asked Questions' , 'the-boss' ); ?> </h3>

								<div class="panel-group sidebar-panel" id="accordion" role="tablist" aria-multiselectable="true">

								<?php 
								$i = 1 ;
								foreach($service_question_answer as $accordion) : ?>
								
								  <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne<?php echo esc_attr( $i ); ?>">
									  <h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo esc_attr( $i ); ?>" aria-expanded="true" aria-controls="collapse<?php echo esc_attr( $i ); ?>" <?php echo ( $i > 1 ) ? ' class="collapsed"' : ''; ?>>
										  <?php echo esc_html( $accordion['question'] ); ?>
										<span class="plus-minus-icon">
											<span class="plus-stick"></span>
											<span class="minus-stick"></span>
										</span>										  
										</a>
									  </h4>
									</div>
									
									<div id="collapse<?php echo esc_attr( $i ); ?>" class="panel-collapse collapse <?php echo ( $i == 1) ? esc_attr( 'in' ) : '' ; ?>" role="tabpanel" aria-labelledby="headingOne<?php echo esc_attr( $i ); ?>">
									  <div class="panel-body">
										<?php echo esc_html( $accordion['answer'] ); ?>
									  </div>
									</div>
								  </div>

								 <?php $i++; endforeach; ?>
								  
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 overflow-hidden">
						<div class="sidebar row">
							<div class="single-sidebar">
								<h3><?php echo esc_html__( 'All Services', 'the-boss' ); ?></h3>
								<ul class="siderbar-menu">
									<?php $service_cats = get_terms( 'tb_service_cat', array(
											'hide_empty'	=> false
										) ); ?>

									<?php foreach( $service_cats as $service_cat) : ?>

									<li><a href="<?php the_permalink(); ?>"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><span><?php echo esc_html($service_cat -> name ); ?></span> </a></li>

									<?php endforeach; ?>


									
								</ul>
							</div>
							<div class="single-sidebar">
								<h3><?php echo esc_html__('Download Brochures', 'the-boss' ); ?></h3>

								<?php foreach($service_download as $download) : 
									$download_image = wp_get_attachment_url($download['download_image']);
								?>

								<a href="<?php echo esc_url($download['download_url'] ); ?>" class="button download-button"><img src="<?php echo esc_url($download_image ); ?>" alt="" /><?php echo esc_html($download['download_text'] ); ?> <img src="<?php echo get_template_directory_uri(); ?>/images/download-icon.png" alt="" /></a>

							<?php endforeach; ?>

							
							</div>
							<div class="single-sidebar">
								<h3>Our Testimonals</h3>
								<div class="testimonial-parents-sidebar">
									<div class="swiper-wrapper">
										<div class="swiper-slide">						
											<div class="testimonial-box">
												<div class="single-testimonial">
													<div class="testimonial-content">
														<div class="testimonial-inner">
															<p>Contnualy garow arnative and
															resource sucking and services. Asservely syndicate fully theme
															researched opportunities.</p>
														</div>								
													</div>
												</div>
												<div class="testimonial-author">
													<div class="testimonial-author-pic">
														<img src="images/testimonial-author-one.jpg" alt="" />
													</div>
													<div class="testimonial-author-info">
														<h3>Robot Smith</h3>
														<span>Designer</span>
													</div>
												</div>							
											</div>
										</div>
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>