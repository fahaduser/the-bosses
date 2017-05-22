<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'the-boss' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'the-boss' ); ?></span></span>

	<?php endif; ?>
	<div class="product-cat-tag-share">
	<?php echo wc_get_product_category_list( $product->get_id(), ', ', _n( '<h3>Category:</h3>', '<h3>Categories:</h3>', count( $product->get_category_ids() ), 'the-boss' ) . ' ' ); ?>
	</div>
	<div class="product-tag-share">
	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', _n( '<h3>Tag:</h3>', '<h3>Tags:</h3>', count( $product->get_tag_ids() ), 'the-boss' ) . ' ' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

	</div>
	<div class="product-tag-share">
		<h3 class="social-h3"><?php echo esc_html__( 'Share:', 'the-boss' ); ?></h3>
		<?php the_boss_social_share(); ?>
	</div>
</div>
