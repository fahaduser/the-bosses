<?php 

// Remove rapper

remove_action('woocommerce_before_main_content','woocommerce_output_content_wrapper',10 );
remove_action('woocommerce_after_main_content','woocommerce_output_content_wrapper_end',10 );

// Remove Saleflash

remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',10 );

remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20 );
remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20 );


// Remove Thumbnail link

remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open',10 );
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_product_link_close',5 );

// Before Shop loop item title

remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10 );
add_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10 );

function woocommerce_template_loop_product_title(){

	echo '<h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3>';
}

// Remove Rating

remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating', 5 );


// Remove Single Product page sale flash

remove_action('woocommerce_before_single_product_summary','woocommerce_show_product_sale_flash', 10 );


// Remove Single Product Rating

remove_action('woocommerce_single_product_summary','woocommerce_template_single_rating', 10 );

// wocommrerce mini cart 

function the_boss_woocommerce_mini_cart(){ ?>

	<i class="fa fa-shopping-cart" aria-hidden="true">
		<span class="chart-number"><?php echo WC()->cart->cart_contents_count; ?></span>
	</i>

		<ul class="cart-list">
	<?php if ( sizeof( WC()->cart->get_cart() ) > 0 ) : ?>

			<?php
			 foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                $_product = $cart_item['data'];
                // Only display if allowed
                if ( ! apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) || ! $_product->exists() || $cart_item['quantity'] == 0 ) continue;
                // Get price
                
                $product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                ?>
					<li>
						<a href="shop_single_page.html">
							<?php echo $_product->get_image(); ?>
						</a>
						<div class="cart-selected-product">
							<h3><a href="shop_single_page.html">
								<?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product ); ?>
							</a></h3>

							<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="cart-select-quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>


							<span><?php echo $product_price; ?></span>
						</div>
						<div class="cart-list-delate">
							<a href="<?php echo WC()->cart->get_remove_url( $cart_item_key ); ?>"><i class="fa fa-times"></i></a>
						</div>
					</li>

			<?php  endforeach; ?>
			<li class="cart-select-total">
				<h3><?php echo esc_html__( 'Subtotal :', 'the-boss' ); ?></h3>
				<span> <?php echo WC()->cart->get_cart_subtotal(); ?> </span>
				<a href="<?php echo esc_url( wc_get_checkout_url() ) ;?>">Checkout</a>
			</li>
			<?php else:  ?>
				<div class="cart-empty">No products in the cart.</div>
				<a class="button cart-empty-btn" href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>"> <i class="fa fa-shopping-cart"></i> Visit Shop</a>
	<?php endif; ?>
		</ul>
<?php }

// mini cart ajax

add_filter('woocommerce_add_to_cart_fragments','the_boss_minicart_count_ajax' );

function the_boss_minicart_count_ajax($fragments){
	ob_start(); ?>

			<span class="chart-number"><?php echo WC()->cart->cart_contents_count; ?></span>

	<?php 
	$fragments['.chart-number'] = ob_get_clean();
	return $fragments;
}

add_filter('woocommerce_add_to_cart_fragments','the_boss_minicart_items_ajax' );

function the_boss_minicart_items_ajax($fragments){
	ob_start(); ?>
		<ul class="cart-list">
	<?php if ( sizeof( WC()->cart->get_cart() ) > 0 ) : ?>

			<?php
			 foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                $_product = $cart_item['data'];
                // Only display if allowed
                if ( ! apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) || ! $_product->exists() || $cart_item['quantity'] == 0 ) continue;
                // Get price
                
                $product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                ?>
					<li>
						<a href="shop_single_page.html">
							<?php echo $_product->get_image(); ?>
						</a>
						<div class="cart-selected-product">
							<h3><a href="shop_single_page.html">
								<?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product ); ?>
							</a></h3>

							<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="cart-select-quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>


							<span><?php echo $product_price; ?></span>
						</div>
						<div class="cart-list-delate">
							<a href="<?php echo WC()->cart->get_remove_url( $cart_item_key ); ?>"><i class="fa fa-times"></i></a>
						</div>
					</li>

			<?php  endforeach; ?>
			<li class="cart-select-total">
				<h3><?php echo esc_html__( 'Subtotal :', 'the-boss' ); ?></h3>
				<span> <?php echo WC()->cart->get_cart_subtotal(); ?> </span>
				<a href="<?php echo esc_url( wc_get_checkout_url() ) ;?>">Checkout</a>
			</li>
			<?php else:  ?>
				<div class="cart-empty">No products in the cart.</div>
				<a class="button cart-empty-btn" href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>"> <i class="fa fa-shopping-cart"></i> Visit Shop</a>
	<?php endif; ?>
		</ul>


	<?php 
	$fragments['.cart-list'] = ob_get_clean();
	return $fragments;
}