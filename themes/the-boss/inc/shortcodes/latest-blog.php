<?php 

function the_boss_latest_blog( $title, $subtitle, $limit, $order ,$orderby , $section_bg, $btn_text,$btn_url ,$tb_class ){ ?>

	<section class="section home-blog-section <?php echo (!empty( $tb_class )) ? esc_attr( $tb_class ) : ''; ?>" <?php if($section_bg) : ?>style="background:<?php echo esc_attr($section_bg ); ?>" <?php endif; ?> >
			<div class="container">
				<div class="row">
					<div class="section-heading">
						<h2 class="section-title"><?php echo wp_kses_post( $title ); ?></h2>
						<p class="section-content"><?php echo wp_kses_post( $subtitle ); ?></p>
					</div>					
				</div>
				<div class="row">
					<div class="row">

						<?php 
						$latest_blog = new WP_Query(array(
							'post_type'			=> 'post',
							'posts_per_page'	=> $limit,
							'order'				=> $order,
							'orderby'			=> $orderby,
							));
						while( $latest_blog -> have_posts()) : $latest_blog -> the_post(); ?>
						<div class="col-sm-4 col-xs-12 latest-blog" >
							<div class="single-blog-box">
								<div class="single-blog-box-img">
									<a href="<?php esc_url( the_permalink() ); ?>">
									<?php the_post_thumbnail( 'the-boss-latest-blog' ); ?>
									</a>
								</div>
								<div class="blog-content">
									<h3><a href="<?php esc_url( the_permalink() ); ?>"> <?php the_title(); ?> </a></h3>
									<div class="post-meta">
										<?php the_boss_posted_on(); ?>
									</div>
									<div class="post-excerpt">
										<p>
										<?php the_excerpt( sprintf(
										/* translators: %s: Name of current post. */
										wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'the-boss' ), array( 'span' => array( 'class' => array() ) ) ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
									) ); ?>
										</p>
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
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<div class="clear-fix"></div>
				</div>
				</div>
			</div>
		</section>

<?php }