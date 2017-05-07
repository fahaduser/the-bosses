<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Boss
 */
$tb_is_btotop_button 	= 1;
$footer_social		 	= '';
$footer_copyright_text  = '';
if(function_exists('cs_get_option')) :
	$tb_is_btotop_button 	= cs_get_option('tb_is_btotop_button');
	$footer_social 		 	= cs_get_option('footer_social');
	$footer_copyright_text  = cs_get_option('footer_copyright_text');
endif;

?>
		<footer class="footer-section">
			<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="row">
							<?php dynamic_sidebar('footer_widgets'); ?>
							</div>
						</div>
					</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="copyright-text">
							<p><?php echo wp_kses_post( $footer_copyright_text ); ?></p>
						</div>
						<?php if($footer_social) : ?>
							<div class="social-icon">
								  <ul>
	                            	<?php foreach( $footer_social as $social_single ) : ?>
	                                	<li><a href="<?php echo esc_url($social_single['social_url'] ); ?>"><i class="<?php echo esc_attr($social_single['social_icon'] ); ?>" aria-hidden="true"></i></a></li>
									<?php endforeach; ?>
		                         </ul>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</footer>
		<?php if($tb_is_btotop_button == 1) : ?>
			<div class="scrollToTop"><i class="fa fa-angle-up"></i></div>
		<?php endif; ?>
		<?php wp_footer(); ?>
    </body>
</html>