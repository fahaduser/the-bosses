<?php 

class Widget_About extends The_Boss_Widget{

	public function __construct(){
		parent::__construct(
            'tb_about',
            esc_html__('The Boss :: About', 'the-boss'),
            array('description' => esc_html__('About widget to display about you with contact information.', 'the-boss' ) )
        );
	}

			public function widget($args, $instance){ 
		
			 echo $args['before_widget'];

				if(!empty($instance['title'])) {echo $args['before_title']. apply_filters( 'widget_title', $instance['title'] ). $args['after_title']; } ?>
                <div class="clearfix"></div>

				<div class="footer-content">
					<p><?php echo wp_kses_post( $instance['about_content'] ); ?></p>
				</div>
				<div class="contact-info">
					<ul>
						<li><i class="fa fa-home" aria-hidden="true"></i><span> <?php echo wp_kses_post( $instance['about_address'] ); ?> </span></li>
						<li><i class="fa fa-phone" aria-hidden="true"></i><span> <?php echo wp_kses_post( $instance['about_cell'] ); ?> </span></li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i><span> <?php echo wp_kses_post( $instance['about_email'] ); ?> </span></li>
						<li><i class="fa fa-globe" aria-hidden="true"></i><span> <?php echo wp_kses_post( $instance['about_website'] ); ?> </span></li>
					</ul>
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
				'id'		=> 'about_content',
				'title'		=> esc_html__( 'Content :', 'the-boss' ),
				'type'		=> 'textarea',
			),
			array(
				'id'		=> 'about_address',
				'title'		=> esc_html__( 'Address :', 'the-boss' ),
				'type'		=> 'textarea',
			),
			array(
				'id'		=> 'about_cell',
				'title'		=> esc_html__( 'Cell Number :', 'the-boss' ),
				'type'		=> 'text',
			),
			array(
				'id'		=> 'about_email',
				'title'		=> esc_html__( 'Eamil :', 'the-boss' ),
				'type'		=> 'text',
			),
			array(
				'id'		=> 'about_website',
				'title'		=> esc_html__( 'Website :', 'the-boss' ),
				'type'		=> 'text',
			),

		);
	}
}