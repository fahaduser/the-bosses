<?php 

function the_boss_contact( $title, $subtitle, $section_bg, $the_boss_contacts , $tb_class ){ 
		
	?>
		<section class="section contact-page-info<?php echo (!empty( $tb_class )) ? esc_attr( ' '. $tb_class ) : ''; ?>" <?php if($section_bg) : ?>style="background:<?php echo esc_attr($section_bg ); ?>" <?php endif; ?>>
			<div class="container">
				<div class="row">
					<div class="section-heading">
						<h2 class="section-title"><?php echo esc_html( $title ); ?></h2>
						<p class="section-content"><?php echo wp_kses_post( $subtitle ); ?></p>
					</div>
				</div>
				<div class="row">
					<div class="contact-information">
						<?php foreach( $the_boss_contacts as $contact ) : 
						$contact_image = wp_get_attachment_url( $contact['contact_image'] );
						?>
						<div class="col-sm-4 col-xs-12">
							<div class="single-contact-info">
								<span class="contact-icon">
									<img src="<?php echo esc_url( $contact_image ); ?>" alt="">
								</span>
								<h3> <?php echo esc_html( $contact['contact_title'] ); ?> </h3>
								 <?php echo wp_kses_post( $contact['contact_description'] ); ?>
								
							</div>
						</div>
					<?php endforeach; ?>
					<div class="clear-fix"></div>
					</div>
				</div>
			</div>
		</section>
 <?php }