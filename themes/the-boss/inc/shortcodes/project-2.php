<?php 
function the_boss_project_2($title, $subtitle, $limit, $order ,$orderby , $section_bg, $btn_text,$btn_url ,$tb_class){ ?>

<section class="project-section section project-page">
	<div class="container">
		<div class="row">
			<div class="section-heading">
				<h2 class="section-title"><?php echo wp_kses_post( $title ); ?></h2>
				<p class="section-content"><?php echo wp_kses_post( $subtitle ); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="all-projects row">
				<?php 
					$tb_project = new WP_Query(array(
						'post_type'			=> 'tb_project',
						'posts_per_page'	=> $limit,
						'order'				=> $order,
						'orderby'			=> $orderby,
						));
					while( $tb_project -> have_posts()) :  $tb_project -> the_post(); 
					$project_data = get_post_meta(get_the_ID(),'_tb_project_options', true );
					$project_desc = isset($project_data['project_desc']) ? $project_data['project_desc'] : '' ;

				?>
				<div class="col-sm-6 col-xs-12">
					<div class="single-project">
						<div class="project-img">
							<?php the_post_thumbnail('the-boss-project-2' ); ?>
						</div>
						<div class="project-info">
							<h3><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title() ?></a></h3>
							<h4><?php echo esc_html__('By ', 'the-boss' ); the_author( ); ?></h4>
						</div>
					</div>
				</div>
				<?php endwhile; wp_reset_postdata(); ?>
				<div class="clear-fix"></div>
			</div>
		</div>
		<?php if($btn_text) : ?>
		<a href="<?php echo esc_url( $btn_url ); ?>" class="button"><?php echo wp_kses_post( $btn_text ); ?></a>
		<?php endif; ?>
	</div>
</section>
<?php }