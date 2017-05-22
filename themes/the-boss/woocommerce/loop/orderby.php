<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
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
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<div class="shop-chart-heading row">
	<div class="col-sm-4 col-xs-12">
		<form class="woocommerce-ordering" method="get">
			<div class="outline-select">
				<span class="select-h4"><?php echo esc_html__( 'Sort By:' , 'the-boss' ); ?></span>
				<select name="orderby" class="orderby">
					<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
						<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
					<?php endforeach; ?>
				</select>
				<span class="select-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
				<?php wc_query_string_form_fields( null, array( 'orderby', 'submit' ) ); ?>
				</div>
		</form>
	</div>
</div>
