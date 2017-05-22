<?php
/**
 * Display single product reviews (comments)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product-reviews.php.
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
 * @version     2.3.2
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( ! comments_open() ) {
	return;
}

?>
<div id="reviews" class="woocommerce-Reviews">
	<div id="comments">
		<div class="customar-review">
		<h3 class="woocommerce-Reviews-title"><?php
			if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' && ( $count = $product->get_review_count() ) ) {
				/* translators: 1: reviews count 2: product name */
				printf( esc_html( _n( 'Customer Reviews', 'Customer Reviews', $count, 'the-boss' ) ), esc_html( $count ), '<span>' . get_the_title() . '</span>' );
			} else {
				_e( 'Reviews', 'the-boss' );
			}
		?></h3>

		<?php if ( have_comments() ) : ?>
				<ul>
					<?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'callback' => 'woocommerce_comments' ) ) ); ?>
				</ul>
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
				echo '<nav class="woocommerce-pagination">';
				paginate_comments_links( apply_filters( 'woocommerce_comment_pagination_args', array(
					'prev_text' => '&larr;',
					'next_text' => '&rarr;',
					'type'      => 'list',
				) ) );
				echo '</nav>';
			endif; ?>

		<?php else : ?>

			<p class="woocommerce-noreviews"><?php _e( 'There are no reviews yet.', 'the-boss' ); ?></p>

		<?php endif; ?>
	</div>
	</div>

	<?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id() ) ) : ?>

		<div id="input-comment">
			
				<?php
					$commenter = wp_get_current_commenter();

					$comment_form = array(
						'title_reply'          => have_comments() ? __( 'Add a review', 'the-boss' ) : sprintf( __( 'Be the first to review &ldquo;%s&rdquo;', 'the-boss' ), get_the_title() ),
						'title_reply_to'       => __( 'Leave a Reply to %s', 'the-boss' ),
						'title_reply_before'   => '<h3>',
						'title_reply_after'    => '</h3>',
						'comment_notes_before'  =>' ',
						'comment_notes_after'  => ' ',
						'fields'               => array(
							'author' => '<div class="row"><div class="col-sm-6 col-xs-12"><input id="author" name="author" type="text" placeholder="Full Name" class="input" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" aria-required="true" required /></div>',
							'email'  => '<div class="col-sm-6 col-xs-12"><input id="email" name="email" type="email" placeholder="Email Address" class="input" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" aria-required="true" required /></div> </div>',
						),
						'label_submit'  => __( 'Submit Review', 'the-boss' ),
						'logged_in_as'  => '',
						'comment_field' => '',
					);

					if ( $account_page_url = wc_get_page_permalink( 'myaccount' ) ) {
						$comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a review.', 'the-boss' ), esc_url( $account_page_url ) ) . '</p>';
					}

					if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' ) {
						$comment_form['comment_field'] = '<div class="col-sm-12 col-xs-12 tb-review-rating"><h4>' . esc_html__( 'Your rating:', 'the-boss' ) . '</h4><select name="rating" id="rating" aria-required="true" required>
							<option value="">' . esc_html__( 'Rate&hellip;', 'the-boss' ) . '</option>
							<option value="5">' . esc_html__( 'Perfect', 'the-boss' ) . '</option>
							<option value="4">' . esc_html__( 'Good', 'the-boss' ) . '</option>
							<option value="3">' . esc_html__( 'Average', 'the-boss' ) . '</option>
							<option value="2">' . esc_html__( 'Not that bad', 'the-boss' ) . '</option>
							<option value="1">' . esc_html__( 'Very poor', 'the-boss' ) . '</option>
						</select></div>';
					}

					$comment_form['comment_field'] .= '<textarea id="comment-reply" name="comment" cols="45" rows="8" placeholder="Type your review" aria-required="true" required></textarea>';

					comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
				?>
			
		</div>

	<?php else : ?>

		<p class="woocommerce-verification-required"><?php _e( 'Only logged in customers who have purchased this product may leave a review.', 'the-boss' ); ?></p>

	<?php endif; ?>

	<div class="clear"></div>
</div>

