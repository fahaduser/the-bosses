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

if(is_single()) :
	$pageclass = 'single-blog-box single-full-blog';
else:
	if($tb_blog_layout == 2) :
		$pageclass = 'col-sm-4 col-xs-12';
		$thumbclass = 'the-boss-latest-blog';
	elseif($tb_blog_layout == 1) :
		$pageclass = 'single-blog-box';
		$thumbclass = 'the-boss-blog';
	endif;
	$pageclass = $pageclass;
endif;
?>
<div id="post-<?php the_ID(); ?>" <?php post_class($pageclass); ?>>

		<div class="single-blog-box-img">
			<a href="<?php esc_url( the_permalink() ); ?>">
				<?php the_post_thumbnail($thumbclass); ?>
			</a>
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
			<?php if( is_single() ) : ?>
			<div class="post-content">
				<p>
				<?php the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'the-boss' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) ); ?>
				</p>
			</div>
			<?php else : ?>

			<div class="post-excerpt">
				<p>
				<?php the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'the-boss' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) ); ?>
				</p>
			</div>

			<?php endif; ?>

		</div>
		<?php if(is_single()) : ?>
		<div class="tag-and-share-box">
			<div class="blog-tag">
				<h4><i class="flaticon-price-tag"></i>Tags :</h4>
				<?php the_boss_entry_footer(); ?>										
			</div>
			
			<div class="blog-share">
				<h4><i class="flaticon-share"></i>Share :</h4>
				<?php the_boss_social_share(); ?>										
			</div>
		</div>
		<?php else : ?>

		<div class="read-more-box">
			<a href="<?php esc_url( the_permalink() ); ?>" class="read-more">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
			<div class="comment-count">
				<span class="comment-number"> <?php echo get_comments_number(get_the_ID()); ?> </span>
				<span class="flaticon-interface"></span>
			</div>
		</div>	

		<?php endif; ?>

	</div>
	<?php if(is_single()) : ?>
		<div class="about-author">
			<h3><?php echo esc_html__('About Author', 'the-boss' ); ?></h3>
			<div class="author-pic">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), '120' ); ?>
			</div>
			<div class="author-description">
				<div class="author-name">
					<h4><?php the_author( ); ?></h4>
					<span>
						<?php $aid = get_the_author_meta('ID'); 
							echo the_boss_get_user_role($aid); ?>
					</span>										
				</div>
				<p><?php echo get_the_author_meta('description') ?></p>
			</div>
		</div>
	<?php endif; ?>

