<?php 
class Widget_Recent_Products extends The_Boss_Widget{


	public function __construct(){
		parent::__construct(
            'tb_recent_products',
            esc_html__('The Boss :: Recent Products', 'the-boss'),
            array('description' => esc_html('Recent Products widget to display your recent products.' ) )
        );
	}

		public function widget($args, $instance){ ?>
		
		<?php echo $args['before_widget']; ?>

								<?php if(!empty($instance['title'])){
									echo $args['before_title'].apply_filters('widget_title',$instance['title'] ). $args['after_title'];
									} ?>
								
									<ul class="latest-news sidebar-latest-news latest-product">

										<?php 
									$recent_product = new WP_Query(array(
											'post_type'				=> 'product',
											'posts_per_page'		=> $instance['post_number'],
											));
										while ($recent_product -> have_posts()) : $recent_product -> the_post(); 
										$product_thumb = wp_get_attachment_url( get_post_thumbnail_id( ) );
										?>
										<?php
												global $woocommerce;
												$currency = get_woocommerce_currency_symbol();
												$price = get_post_meta( get_the_ID(), '_regular_price', true);
												$sale = get_post_meta( get_the_ID(), '_sale_price', true);
												?>
												 
												
										<li>
											<span class="small-thumbnail">
												<a href="<?php esc_url( the_permalink()); ?>">
													<img src="<?php echo esc_url( $product_thumb ); ?>" alt="">
													
												</a>
											</span>
											<div class="content">
												<a href="<?php esc_url( the_permalink()); ?>" class="product-title"><?php the_title( ); ?></a>

													<h3><span class="currency"><?php echo $currency; ?></span><?php echo $price; ?> </h3>   
											</div>
										</li>
										<?php endwhile; wp_reset_postdata(); ?>
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
				'title'		=> esc_html__( 'Number of Products to show:', 'the-boss' ),
				'type'		=> 'number',
				),
			);
	}

}