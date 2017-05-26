<?php 
if( function_exists( 'is_woocommerce') ) :
function the_boss_wc_products( $title, $subtitle, $limit, $order ,$orderby , $section_bg, $btn_text,$btn_url ,$tb_class ){ ?>

<section class="section shoping-section-home <?php echo (!empty( $tb_class )) ? esc_attr( $tb_class ) : ''; ?>" <?php if($section_bg) : ?>style="background:<?php echo esc_attr($section_bg ); ?>" <?php endif; ?>>
	<div class="container">
		<div class="row">
			<div class="section-heading">
				<h2 class="section-title"><?php echo wp_kses_post( $title ); ?></h2>
				<p class="section-content"><?php echo wp_kses_post( $subtitle ); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="row">
				<div class="all-products row">
						<?php 
							$woocommerce_product = new WP_Query(array(
								'post_type'				=> 'product',
								'posts_per_page'		=> $limit,
								'order'					=> $order,
								'orderby'				=> $orderby,
								));
							while ($woocommerce_product -> have_posts()) : $woocommerce_product -> the_post(); 
							$product_thumb = wp_get_attachment_url( get_post_thumbnail_id( ) );

							global $woocommerce;
							$currency = get_woocommerce_currency_symbol();
							$price = get_post_meta( get_the_ID(), '_regular_price', true);
							$sale = get_post_meta( get_the_ID(), '_sale_price', true);
						?>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single-product">
							<div class="product-image woo-product-thumb">
								<img src="<?php echo esc_url( $product_thumb );?> " alt="" />
							</div>
							<div class="add-chart-icon">
								<a href="<?php esc_url( the_permalink()); ?>" class=""><i class="fa fa-shopping-basket"></i><span class="add-chart-text"><?php echo esc_html__( 'ADD TO CART', 'the-boss' ); ?></span></a>
							</div>
							<div class="product-info">
								<h3><a href="<?php esc_url( the_permalink()); ?>"><?php the_title(); ?></a></h3>
								<h4> <span class="currency"><?php echo esc_html( $currency ); ?></span><?php echo esc_html( $price ); ?>  </h4>
							</div>
						</div>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>

					
				</div>
			</div>					
		</div>
	</div>
</section>
<?php }
endif;