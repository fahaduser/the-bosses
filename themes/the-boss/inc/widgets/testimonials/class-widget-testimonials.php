<?php 

class Widget_Testimonials extends The_Boss_Widget{

	public function __construct(){
		parent::__construct(
            'tb_testimonials',
            esc_html__('The Boss :: Testimonial', 'the-boss'),
            array('description' => esc_html('Testimonial widget to display your Testimonials.' ) )
        );
	}

		public function widget($args, $instance){ ?>
		
		<?php echo $args['before_widget']; ?>

			<?php if(!empty($instance['title'])){
				echo $args['before_title'].apply_filters('widget_title',$instance['title'] ). $args['after_title'];
				} ?>

				<div class="testimonial-parents-sidebar">
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
				<?php endwhile; wp_reset_postdata(); ?>
					
				</div>
			</div>	

			<?php echo $args['after_widget']; ?>

	 <?php }

	function get_options(){
		return array(

			array(
				'id'		=> 'title',
				'title'		=> esc_html__( 'Title:', 'the-boss' ),
				'type'		=> 'text',
				),

			array(
				'id'		=> 'post_number',
				'title'		=> esc_html__( 'Number of posts to show:', 'the-boss' ),
				'type'		=> 'number',
				),

			array(
				'id'		=> 'showdate',
				'label'		=> esc_html__( 'Display post date?', 'the-boss' ),
				'type'		=> 'checkbox',
				),

			);
	}
}