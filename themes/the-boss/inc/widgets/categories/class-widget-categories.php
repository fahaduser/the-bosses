<?php 

class Widget_Categories extends The_Boss_Widget{

	public function __construct(){
		parent::__construct(
            'tb_categories',
            esc_html__('The Boss :: Categories', 'the-boss'),
            array('description' => esc_html__('Category widget to display your categories.', 'the-boss' ) )
        );
	}

			public function widget($args, $instance){ 
		
			 echo $args['before_widget'];

				if(!empty($instance['title'])) {echo $args['before_title']. apply_filters( 'widget_title', $instance['title'] ). $args['after_title']; } ?>
                <div class="clearfix"></div>

                <ul class="siderbar-menu sidebar-category">
                	<?php
                		 $categories = get_terms('category', array(
                		 		'orderby'	=> 'name',
                		 		'hide_empty'	=> true,
                		 	));

                		 foreach($categories as $category) :
                		 	$category_link = get_term_link( $category, $category->slug );
                	 ?>
                    <li><a href="<?php echo esc_url($category_link );; ?>">
                    	<i class="fa fa-chevron-circle-right" aria-hidden="true"></i><span><?php echo esc_html($category->name ); ?></span>
                    	<?php if(!empty($instance['showpostcount'])) : ?>
                    	<span class="category-post-count"><?php echo esc_html($category->count ); ?></span>
					<?php endif; ?>
                    </a>
                    </li>

                <?php endforeach; ?>
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
				'id'		=> 'showpostcount',
				'label'		=> esc_html__( 'Show post counts', 'the-boss' ),
				'type'		=> 'checkbox',
				),

			);
	}
}