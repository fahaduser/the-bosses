<?php 

class Widget_Recent_News extends The_Boss_Widget{

	public function __construct(){
		parent::__construct(
            'tb_recent_news',
            esc_html__('The Boss :: Recent News', 'the-boss'),
            array('description' => esc_html('Resent News widget to display your Resent posts.' ) )
        );
	}

		public function widget($args, $instance){ ?>
		
		<?php echo $args['before_widget']; ?>

			<?php if(!empty($instance['title'])){
				echo $args['before_title'].apply_filters('widget_title',$instance['title'] ). $args['after_title'];
				} ?>

				<ul class="latest-news sidebar-latest-news">

					<?php 
					$event_hub_recent_post = new WP_Query(array(
							'post_type'				=> 'post',
							'posts_per_page'		=> $instance['post_number'],
						));
					if($event_hub_recent_post -> have_posts()) :  ?>
						<?php while($event_hub_recent_post -> have_posts()) : $event_hub_recent_post -> the_post(); ?>
					<li>
					<span class="small-thumbnail"> <a href="<?php esc_url(the_permalink() ); ?>">
							<?php the_post_thumbnail('the-boss-testimonial-recentphoto'); ?>
						</a> </span>
						<div class="content">
							<?php the_title('<a href="'.esc_url(get_permalink() ).'" class="latest-news-title">','</a>' ); ?>
							<?php if(!empty($instance['showdate'])) : ?>
								<span class="post-date"><?php the_time('d F Y' ); ?>
								</span>
							<?php endif; ?>

						</div>
					</li>
						<?php endwhile; ?>
					<?php endif; ?>
					
				</ul>

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