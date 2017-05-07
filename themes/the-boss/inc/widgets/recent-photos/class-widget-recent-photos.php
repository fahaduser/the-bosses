<?php 

class Widget_Recent_Photos extends The_Boss_Widget{

	public function __construct(){
		parent::__construct(
            'tb_recent_photos',
            esc_html__('The Boss :: Recent Photos', 'the-boss'),
            array('description' => esc_html('Recent Photos widget to display your recent blog photos.' ) )
        );
	}

		public function widget($args, $instance){ ?>
		
		<?php echo $args['before_widget']; ?>

			<?php if(!empty($instance['title'])){
				echo $args['before_title'].apply_filters('widget_title',$instance['title'] ). $args['after_title'];
				} ?>
					<?php 
						$tb_recent_phot = new WP_Query(array(
							'post_type'				=> 'post',
							'posts_per_page'		=> $instance['post_number'],
						));
					 ?>
					<?php if( $tb_recent_phot -> have_posts()) : ?>
						<div class="footer-instagram">
							<?php while( $tb_recent_phot -> have_posts()) : $tb_recent_phot -> the_post(); ?>
								<a href="<?php esc_url(the_permalink()); ?>">
									<?php the_post_thumbnail( 'the-boss-testimonial-recentphoto' ); ?>
								</a>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
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
				'title'		=> esc_html__( 'Number of Photos to show:', 'the-boss' ),
				'type'		=> 'number',
				),
			);
	}
}