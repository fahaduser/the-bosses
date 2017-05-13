<?php
/**
 * Template part for displaying single Member
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Boss
 */
$members_data 		= '';
$member_designation = '';
$member_desc 		= '';
$member_social 		= '';
$member_contact 	= '';
$member_statement 	= '';
$member_skills 		= '';
$member_award 		= '';

if(function_exists('cs_get_option')) :
	$members_data 				= get_post_meta( get_the_ID() , '_tb_team_options', true );
	$member_designation 		= isset($members_data['member_designation']) ? $members_data['member_designation'] : '';
	$member_desc 				= isset($members_data['member_desc']) ? $members_data['member_desc'] : '';
	$member_social 				= isset($members_data['member_social']) ? $members_data['member_social'] : '';
	$member_contact 			= isset($members_data['member_contact']) ? $members_data['member_contact'] : '';
	$member_statement 			= isset($members_data['member_statement']) ? $members_data['member_statement'] : '';
	$member_skills 				= isset($members_data['member_skills']) ? $members_data['member_skills'] : '';
	$member_award 				= isset($members_data['member_award']) ? $members_data['member_award'] : '';
	
endif;
?>
<section class="section single-team-member-details-section">
			<div class="container">
				<div class="row">
					<div class="single-team-member-details">
						<div class="row">
							<div class="member-full-information">
								<div class="col-md-6 col-sm-12">
									<div class="member-full-pic row">
										<?php the_post_thumbnail( 'the-boss-team-single' ); ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="member-full-bio row">
										<div class="member-info">
											<?php the_title( '<h3>','</h3>' ); ?>
											<h4> <?php echo ( !empty( $member_designation ) ) ? esc_html( $member_designation ) : '' ?> </h4>
										</div>
										<?php echo wp_kses_post( $member_desc ); ?>
										<?php if( $member_social ) : ?>
											<div class="social-icon">
												<ul>
													<?php foreach( $member_social as $social) : ?>

													<li><a href="<?php echo esc_url( $social['social_url'] ); ?>"><i class="<?php echo esc_attr( $social['social_icon'] ); ?>" aria-hidden="true"></i></a></li>
													
												<?php endforeach; ?>
												</ul>
											</div>
										<?php endif; ?>
										<div class="clear-fix"></div>
										<?php if( $member_contact ) : ?>
										<div class="contact-info">
											<ul>
												<?php foreach( $member_contact as $contact ) : ?>
												<li><i class="<?php echo esc_attr( $contact['contact_icon'] ); ?>" aria-hidden="true"></i><span> <?php echo esc_html( $contact['contact_info'] ); ?></span></li>
											<?php endforeach; ?>
											</ul>
										</div>
										<?php endif; ?>										
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="personal-statement">
									<h3><?php echo esc_html__( 'Personal Statement', 'the-boss' ); ?></h3>
									<?php echo wp_kses_post( $member_statement ); ?>
								</div>							
							</div>

						</div>
						<div class="row">
							<div class="member-skill-award">
								<div class="col-md-6 col-sm-12">
									<div class="member-skill row">
										<h3><?php echo esc_html__( 'Personal Skill', 'the-boss' ); ?></h3>

										<?php foreach( $member_skills as $skill ) : ?>
										<div class="col-xs-12 col-sm-3 skillsArea">
										  <div class="skills">
											<span class="chart skilBg" data-percent="<?php echo esc_attr( $skill['skill_percent'] ); ?>"> <span class="percent"></span> </span>
											<h4><?php echo esc_html( $skill['skill_name'] ); ?></h4>
										  </div>
										</div>
										<?php endforeach; ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="member-award">
										<h3><?php echo esc_html__( 'Recognitions Award', 'the-boss' ); ?></h3>

										<?php foreach( $member_award as $award) :
										$award_thumb = wp_get_attachment_url( $award['award_image'] );
										 ?>
										<div class="col-xs-12 col-sm-3">
											 <div class="sinlge-award">
												<div class="award-pic">
													<img src="<?php echo esc_url( $award_thumb ); ?>" alt="" />	
												</div>
												<h4><?php echo esc_html( $award['award_name'] ); ?></h4>
											 </div>
										</div>
										<?php endforeach; ?>

																					
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>