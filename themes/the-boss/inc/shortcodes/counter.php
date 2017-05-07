<?php 

function the_boss_counter( $counter_image, $the_boss_counter, $tb_class ){ 
		$counter_image = wp_get_attachment_url( $counter_image );
	?>
<?php if($the_boss_counter) : ?>
<section class="counter-section parallax" data-dir="down" id="counter-section" <?php if( $counter_image ) : ?> style="background-image: url( <?php echo esc_url( $counter_image ); ?>);" <?php endif; ?> >
			<div class="parallax-window">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<?php foreach( $the_boss_counter as $counter_data ) : 
							$counter_image = wp_get_attachment_url( $counter_data['counter_image'] );
							?>
							<div class="col-sm-3 col-xs-6">
								<div class="single-counter-box">
									<span class="counter-icon"><img src="<?php echo esc_url( $counter_image ); ?>" alt=""></span>

									<span class="counter"><?php echo esc_html( $counter_data['counter_number'] ); ?></span>
									<h3> <?php echo esc_html( $counter_data['counter_title'] ); ?> </h3>
								</div>
							</div>
							<?php endforeach; ?>
							
						</div>
					</div>				
				</div>
			</div>
		</section>
 <?php endif; }