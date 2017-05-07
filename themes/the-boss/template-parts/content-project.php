<?php
/**
 * Template part for displaying single projects
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Boss
 */
$projects_data 		= '';
$project_desc 		= '';
$project_date 		= '';
$project_client 	= '';
$project_preview 	= '';
$project_download 	= '';
if(function_exists('cs_get_option')) :
	$projects_data 		= get_post_meta( get_the_ID() , '_tb_project_options', true );
	$project_desc 		= isset($projects_data['project_desc']) ? $projects_data['project_desc'] : '';
	$project_date 		= isset($projects_data['project_date']) ? $projects_data['project_date'] : '';
	$project_client 	= isset($projects_data['project_client']) ? $projects_data['project_client'] : '';
	$project_preview 	= isset($projects_data['project_preview']) ? $projects_data['project_preview'] : '';
	$project_download 	= isset($projects_data['project_download']) ? $projects_data['project_download'] : '';
endif;
?>
<section class="section project-single">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-12">
				<div class="row">
					<div class="project-large-pic">
						<?php the_post_thumbnail( 'the-boss-project-single' ); ?>
					</div>
					<div class="project-details">
						<div class="col-sm-4">
							<div class="project-info">
								<ul>
									<li>
										<h4><?php echo esc_html__('Title:', 'the-boss' ); ?></h4>
										<?php the_title('<span>','</span>' ); ?>
									</li>
									<li>
										<h4><?php echo esc_html__('Date:', 'the-boss' ); ?></h4>
										<span><?php echo wp_kses_post($project_date ); ?></span>
									</li>
									<li>
										<h4><?php echo esc_html__('Client:', 'the-boss' ); ?></h4>
										<span><?php echo wp_kses_post($project_client ); ?></span>
									</li>
									<li>
										<h4><?php echo esc_html__('Category:', 'the-boss' ); ?></h4>
										<?php $project_cats = get_the_terms( get_the_ID() , 'tb_project_cat' ); ?>
										<?php foreach( $project_cats as $project_cat) : ?>
											<span class="project-cat"><?php echo $project_cat->name; ?></span>
										<?php endforeach;
										?>
									</li>
									<li>
										<h4><?php echo esc_html__('Online Preview:', 'the-boss' ); ?></h4>
										<span><?php echo wp_kses_post($project_preview ); ?></span>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="project-description">
								<h3><?php echo esc_html__('Project Description', 'the-boss' ); ?></h3>
								<?php echo wp_kses_post($project_desc ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<?php the_boss_related_post(get_the_ID()); ?>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="project-download">
						<h3><?php echo esc_html__('Download Brochures', 'the-boss' ); ?></h3>
						<?php 
						if($project_download) :
						foreach( $project_download as $project_download_data) : 
							$download_image = wp_get_attachment_url($project_download_data['download_image'] );
							?>
							<a href="<?php echo esc_url($project_download_data['download_url'] ); ?>" class="button download-button">
							<img src="<?php echo esc_url($download_image); ?>" alt="" />
							<?php echo wp_kses_post($project_download_data['download_text'] ); ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/download-icon.png" alt="" /></a>
						<?php endforeach; endif;?>

				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="project-share">
					<h3><?php echo esc_html__('Share', 'the-boss' ); ?></h3>
					<div class="social-icon">
						<ul>
							<li><a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="http://twitter.com/home?status=<?php the_title(); ?> <?php echo urlencode(get_permalink($post->ID)); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="https://plusone.google.com/_/+1/confirm?hl=en&amp;url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;name=<?php the_title(); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink($post->ID)); ?>&title=<?php the_title(); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						</ul>
					</div>							
				</div>
			</div>
		</div>
	</div>
</section>