<?php function the_boss_team_2($title, $subtitle, $limit, $order ,$orderby , $section_bg, $btn_text,$btn_url ,$tb_class){ ?>

		<section class="section team-section team-member-page <?php echo (!empty( $tb_class )) ? esc_attr( $tb_class ) : ''; ?>" <?php if($section_bg) : ?>style="background:<?php echo esc_attr($section_bg ); ?>" <?php endif; ?>>
			<div class="container">
				<div class="row">
					<div class="section-heading">
						<h2 class="section-title"><?php echo esc_html( $title ); ?></h2>
						<p class="section-content"><?php echo wp_kses_post( $subtitle ); ?></p>
					</div>
				</div>
				<div class="row">
					<div class="all-team-members row">
						
						<?php 
							$tb_members = new WP_Query(array(
								'post_type'			=> 'tb_team',
								'posts_per_page'	=> $limit,
								'order'				=> $order,
								'orderby'			=> $orderby,
								));
							while( $tb_members -> have_posts()) :  $tb_members -> the_post(); 
							$team = get_post_meta(get_the_ID(),'_tb_team_options', true );
							$member_designation = isset($team['member_designation']) ? $team['member_designation'] : '' ;
							$member_socials 		= isset($team['member_social']) ? $team['member_social'] : '' ;
							$member_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'full' );

						?>

						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="single-team-member">
								<div class="member-image">
									<?php the_post_thumbnail( 'the-boss-team-1' ); ?>
									<div class="round-overlay">	</div>
									<?php if( $member_socials ) : ?>
										<div class="member-social-link">
											<?php foreach( $member_socials as $member_social ) : ?>
											<a href="<?php echo esc_url( $member_social['social_url'] ); ?>" class="<?php echo esc_attr( $member_social['social_icon'] ); ?>" aria-hidden="true"></a>
											<?php endforeach; ?>
										</div>
									<?php endif; ?>
								</div>
								<div class="plus-minus-icon">
									<span class="plus-stick"></span>
									<span class="minus-stick"></span>
								</div>
								<div class="member-info">
									<h3><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title( ); ?></a></h3>
									<h4><?php echo esc_html( $member_designation ); ?></h4>
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