<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Boss
 */
$tb_blog_layout = 1;
if(function_exists('cs_get_option')) :
	$tb_blog_layout = cs_get_option('tb_blog_layout');
endif;
get_header(); ?>

<?php if( !empty($tb_blog_layout)) : ?>
	<?php get_template_part( 'template-parts/blog/blog', $tb_blog_layout ); ?>
<?php else : ?>
	<?php get_template_part( 'template-parts/blog/blog', 1 ); ?>
<?php endif; ?>
		
<?php get_footer();
