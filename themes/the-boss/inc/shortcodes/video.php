<?php 

function the_boss_video_section( $section_bg,$title,$video_url ,$tb_class ){
	$section_bg = wp_get_attachment_url( $section_bg );
 ?>
	<section class="parallax" id="video-paralux-section" data-dir="down" <?php if($section_bg) : ?> style="background-image:url( <?php echo esc_url( $section_bg ); ?>)" <?php endif; ?> >
		<div class="parallax-window">
			<div class="container">
				<div class="video-area">
					<div class="video-icon">
						<a href="<?php echo esc_url( $video_url ); ?>" class="flaticon-play-button various fancybox.iframe"></a>
					</div>
					<?php echo ( !empty( $title ) ) ? '<h2>'. $title . '</h2>' : '' ; ?>
				</div>
			</div>
		</div>
	</section>
<?php }