<?php
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_list_comments
 * @since 1.0.0
 * @version 1.0.0
 * @author CodexCoder
 */

function the_boss_comment_template( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
            // Display trackbacks differently than normal comments.
            ?>
            <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
            <p><?php esc_html__( 'Pingback:', 'the-boss' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'the-boss' ), '<span class="edit-link">', '</span>' ); ?></p>
            <?php
            break;
        default :
            // Proceed with normal comments.
            global $post;
            ?>
        <li <?php comment_class('comment'); ?> id="li-comment-<?php comment_ID(); ?>">
            <article id="comment-<?php comment_ID(); ?>" class="comment-item">
                <div class="profile-image">
                    <?php echo get_avatar( $comment, 90 ); ?>
                </div><!-- /.profile-image -->

                <div class="comment-content">
                    <div class="comment_meta">
                        <div class="user-name">
                            <h3><?php echo get_comment_author_link(); ?></h3>
                            <span> <?php echo sprintf( esc_html__( '%1$s at %2$s', 'the-boss' ), get_comment_date(), get_comment_time() ) ?> </span>
                        </div><!-- /.comment-meta -->
                        <div class="reply-btn">
                        <?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'the-boss' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                        </div>
                    </div><!-- /.comment-meta -->

                    
                        <?php if ( '0' == $comment->comment_approved ) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html__( 'Your comment is awaiting moderation.', 'the-boss' ); ?></p>
                        <?php endif; ?>

                        <?php comment_text(); ?>

                        <?php edit_comment_link( esc_html__( 'Edit', 'the-boss' ), '<p class="edit-link">', '</p>' ); ?>
                   

                    
                </div><!-- /.contents -->

            </article>
            <?php
            break;
    endswitch; // end comment_type check
}

/**
 * Comment Form
 *
 * @since 1.0.0
 * @version 1.0.0
 * @author CodexCoder
 */
function the_boss_comment_form() {
    $commenter = wp_get_current_commenter();
    $req = get_option( 'comment_author_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $fields =  array(
        'author' => '<div class="row"><div class="col-sm-4 col-xs-12"><input class="input" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="' . esc_attr__( 'Full Name', 'the-boss' ) . '"' . $aria_req . ' /> </div>',
        'email'  => '<div class="col-sm-4 col-xs-12"><input class="input" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="' . esc_attr__( 'Email Address', 'the-boss' ) . '"' . $aria_req . ' /> </div>',
        'url'    => '<div class="col-sm-4 col-xs-12"><input class="input" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="' . esc_attr__( 'Website', 'the-boss' ) . '"/> </div></div>',
    );
    $comments_args = array(
        'fields'                =>  $fields,
        'title_reply'           =>'Leave a Reply',
        'label_submit'          =>  __('Send Message','the-boss'),
        'title_reply_before'    => '<div class="input-comment"><h3>',
        'title_reply_after'     => '</h3>',
        'comment_notes_before'  =>' ',
        'comment_field' => '<textarea id="comment-reply" name="comment" cols="45" rows="7" placeholder="' . esc_attr__( 'Type Here Message', 'the-boss' ) . '" aria-required="true"></textarea>',
        'comment_notes_after' => '',
        'submit_field'         => '<div class="submit-button-div"><span class="button">%1$s %2$s</span></div></div>',
    );
    comment_form($comments_args);
}