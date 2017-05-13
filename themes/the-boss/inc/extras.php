<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package The_Boss
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function the_boss_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'the_boss_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function the_boss_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'the_boss_pingback_header' );

// Blog Excerpt

function the_boss_excerpt_more( $more ) {
    return ' ';
}
add_filter( 'excerpt_more', 'the_boss_excerpt_more' );

// The Boss social share

function the_boss_social_share(){ ?>
	<div class="social-icon">
		<ul id="social-style-two">
			<?php $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
			<li><a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="http://twitter.com/home?status=<?php the_title(); ?> <?php echo urlencode(get_permalink($post->ID)); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a href="https://plusone.google.com/_/+1/confirm?hl=en&amp;url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;name=<?php the_title(); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
			<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink($post->ID)); ?>&title=<?php the_title(); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			<li><a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
		</ul>
	</div>

<?php }

// Author Role


function the_boss_get_user_role($id) {

    $user = new WP_User($id);

    return array_shift($user->roles);

}

// Comment form order

function the_boss_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}

add_filter( 'comment_form_fields', 'the_boss_move_comment_field_to_bottom' );

// Releted Project

function the_boss_related_post($postid){
							$terms = get_the_terms( $post->ID , 'tb_project_cat', 'string');
							//Pluck out the IDs to get an array of IDS
							$term_ids = wp_list_pluck($terms,'term_id');

                            $relateds = new WP_Query( array( 
                                'post_type' 		=> 'tb_project', 
                                'tax_query' => array(
				                    array(
				                        'taxonomy' => 'tb_project_cat',
				                        'field' => 'id',
				                        'terms' => $term_ids,
				                        'operator'=> 'IN' //Or 'AND' or 'NOT IN'
				                     )), 
                                'posts_per_page' 	=> 5, 
                                'post__not_in' 		=> array($postid) 

                                ) ); ?>


                        <?php  if($relateds->have_posts()) :  ?>

		                 <div class="related-project">
								<?php 
		                          while($relateds->have_posts()) : $relateds->the_post(); ?>
							<div class="col-md-12">
								<div class="related-project-pic">
									<a href="<?php esc_url( the_permalink() ); ?>"><?php the_post_thumbnail( 'the-boss-portfolio-2-in' ); ?></a>
								</div>
							</div>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>

                    <?php endif; ?>
                        <!-- /.ccr-section related-post -->
<?php }


/**
 *  The boss Testimonial
 */

function the_boss_testimonial(){ ?>

		<div class="single-sidebar">
			<h3><?php echo esc_html__( 'Our Testimonals', 'the-boss' ); ?></h3>
			<div class="testimonial-parents-sidebar">
				<div class="swiper-wrapper">

				<?php 
				$tb_testimonial = new WP_Query(array(
					'post_type'		=> 'tb_testimonial'
					));
				while($tb_testimonial -> have_posts()) : $tb_testimonial -> the_post() ; 
				$testimonial_data = get_post_meta( get_the_ID(),'_tb_testimonial_options', true );
				$testimonial_desc = isset($testimonial_data['testimonial_desc']) ? $testimonial_data['testimonial_desc'] : '';
				$testimonial_subtitle = isset($testimonial_data['testimonial_subtitle']) ? $testimonial_data['testimonial_subtitle'] : '';
				?>
					<div class="swiper-slide">						
						<div class="testimonial-box">
							<div class="single-testimonial">
								<div class="testimonial-content">
									<div class="testimonial-inner">
										<p><?php echo wp_kses_post( $testimonial_desc ); ?></p>
									</div>								
								</div>
							</div>
							<div class="testimonial-author">
								<div class="testimonial-author-pic">
									<?php the_post_thumbnail( 'the-boss-testimonial-recentphoto' ); ?>
								</div>
								<div class="testimonial-author-info">
									<?php the_title( '<h3>','</h3>' ); ?>
									<span><?php echo esc_html( $testimonial_subtitle ); ?></span>
								</div>
							</div>							
						</div>
					</div>

					<?php endwhile; wp_reset_postdata(); ?>


				</div>
			</div>								
		</div>
<?php }