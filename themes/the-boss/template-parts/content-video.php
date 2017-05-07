<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Boss
 */
$custom_post_options 	= '';
$tb_youtube_video_url 	= '';
$tb_vimeo_video_url 	= '';

$tb_blog_layout = '';
if(function_exists('cs_get_option')) :
	$tb_blog_layout = cs_get_option('tb_blog_layout');
endif;

if($tb_blog_layout == 2) :
		$pageclass = 'col-sm-4 col-xs-12';
	elseif($tb_blog_layout == 1) :
		$pageclass = 'single-blog-box';
endif;

if(function_exists('cs_get_option')) :
	$custom_post_options 	= get_post_meta(get_the_ID(), '_custom_post_options', true );
	$tb_youtube_video_url 	= isset( $custom_post_options['tb_youtube_video_url'] ) ? $custom_post_options['tb_youtube_video_url'] : '';
	$tb_vimeo_video_url 	= isset( $custom_post_options['tb_vimeo_video_url'] ) ? $custom_post_options['tb_vimeo_video_url'] : '';
endif;
?>
<div id="post-<?php the_ID(); ?>" <?php post_class($pageclass); ?>>

		<div class="single-blog-box-img">
			<?php the_post_thumbnail('the-boss-blog'); ?>
			<div class="blog-video-icon">
				<?php if($tb_youtube_video_url) : ?>

					<a href="http://www.youtube.com/embed/<?php echo esc_url($tb_youtube_video_url) ?>?autoplay=1" class="flaticon-play-button various fancybox.iframe"></a>
					
				<?php else: ?>

				 <a href="https://player.vimeo.com/video/<?php echo esc_url($tb_vimeo_video_url) ?>" class="flaticon-play-button various fancybox.iframe"></a> 

				<?php endif; ?>
			</div>
		</div>		
		<div class="blog-content">
			
			<?php 		
			if ( is_single() ) :
			the_title( '<h3>', '</h3>' );
		else :
			the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif; ?>

			<div class="post-meta">
				<?php the_boss_posted_on(); ?>
			</div>
			<div class="post-excerpt">
				<p><?php the_excerpt(); ?></p>
			</div>
		</div>
		<div class="read-more-box">
			<a href="<?php esc_url( the_permalink() ); ?>" class="read-more">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
			<div class="comment-count">
				<span class="comment-number"> <?php echo get_comments_number(get_the_ID()); ?> </span>
				<span class="flaticon-interface"></span>
			</div>
		</div>
	</div>

