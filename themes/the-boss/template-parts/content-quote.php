<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Boss
 */
$tb_blog_layout = '';
if(function_exists('cs_get_option')) :
	$tb_blog_layout = cs_get_option('tb_blog_layout');
endif;
?>

		<div class="speacial-quotation <?php echo ( $tb_blog_layout == 2 ) ? 'col-sm-4 col-xs-12' :  ''; ?>">
			<?php the_content(); ?>
		</div>