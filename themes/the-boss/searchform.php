<?php
/**
 * Template for displaying search forms in The Boss
 *
 * @package WordPress
 * @subpackage The_Boss
 * @since 1.0
 * @version 1.0
 */
?>
<div class="sidebar-search">
	<form role="search" method="get" class="sidebar-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

		<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Type Your Search...', 'placeholder', 'the-boss' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		<button type="submit" class="search-icon">
			<span class="flaticon-search"></span>
		</button>
	</form>
</div>
