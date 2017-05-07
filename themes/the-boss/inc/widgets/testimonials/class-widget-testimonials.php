<?php 

class Widget_Testimonials extends The_Boss_Widget{

	public function __construct(){
		parent::__construct(
            'tb_testimonials',
            esc_html__('The Boss :: Testimonial News', 'the-boss'),
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
									<img src="<?php echo get_template_directory_uri() ?>/images/testimonial-author-one.jpg" alt="" />
								</div>
								<div class="testimonial-author-info">
									<h3>Robot Smith</h3>
									<span>Designer</span>
								</div>
							</div>							
						</div>
					</div>
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
									<img src="<?php echo get_template_directory_uri() ?>/images/testimonial-author-one.jpg" alt="" />
								</div>
								<div class="testimonial-author-info">
									<h3>Robot Smith</h3>
									<span>Designer</span>
								</div>
							</div>							
						</div>
					</div>
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
									<img src="<?php echo get_template_directory_uri() ?>/images/testimonial-author-one.jpg" alt="" />
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