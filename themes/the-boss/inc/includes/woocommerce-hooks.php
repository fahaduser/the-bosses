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

