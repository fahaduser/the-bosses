<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Boss
 */

if ( ! is_active_sidebar( 'right_sidebar' ) ) {
	return;
}
?>
<div class="col-md-3">
	<div class="sidebar row">
		<?php dynamic_sidebar('right_sidebar' ); ?>
	</div>
</div>