<?php 

function the_boss_contact_form( $title, $subtitle, $section_bg, $contact_scode , $tb_class ){ ?>
<section class="section give-feedback-section<?php echo (!empty( $tb_class )) ? esc_attr( ' '. $tb_class ) : ''; ?>" <?php if($section_bg) : ?>style="background:<?php echo esc_attr($section_bg ); ?>" <?php endif; ?>>
			<div class="container">
				<div class="row">
					<div class="section-heading">
						<h2 class="section-title"><?php echo esc_html( $title ); ?></h2>
						<p class="section-content"><?php echo wp_kses_post( $subtitle ); ?></p>
					</div>
				</div>
				<div class="row">
					<div class="sent-feedback-box">
						<?php echo ( !empty( $contact_scode ) ) ? do_shortcode( $contact_scode ) :''; ?>
					</div>
				</div>
			</div>
		</section>		
 <?php }