<?php 
function the_boss_newsletter( $section_bg,$tb_class ){ ?>


<section class="newletter-section <?php echo (!empty( $tb_class )) ? esc_attr( $tb_class ) : ''; ?>" style="background: <?php echo esc_attr( $section_bg ); ?>;">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'newsletter-widgets' ); ?>
					<!-- <div class="newsletter-section-box">
						<h2>Join Our Newsletter</h2>
						<div class="input-box">
							<form action="email">
								<input type="email" name="email" placeholder="Enter your e-mail here" />
								<input type="submit" value="Subscrive Now" />
							</form>
						</div>
					</div> -->

				</div>
			</div>
		</section>

<?php }