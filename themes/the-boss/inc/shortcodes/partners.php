<?php

function the_boss_partners( $title, $subtitle, $section_bg , $partners , $tb_class ){ ?>
<section class="section logo-section <?php echo (!empty( $tb_class )) ? esc_attr( $tb_class ) : ''; ?>" <?php if($section_bg) : ?>style="background:<?php echo esc_attr($section_bg ); ?>" <?php endif; ?> >
	<div class="container">
		<div class="row">
			<div class="section-heading">
				<h2 class="section-title"><?php echo wp_kses_post( $title ); ?></h2>
				<p class="section-content"><?php echo wp_kses_post( $subtitle ); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="swiper-container-two">
				<div class="swiper-wrapper">

				<?php foreach( $partners as $partner ) : 
					$partner_logo = wp_get_attachment_url( $partner['partner_logo'] );
				?>
					<div class="swiper-slide">
						<div class="single-logo">
							<?php if( $partner['partner_url'] ) : ?>
								<a href="<?php echo esc_url( $partner['partner_url'] ); ?>"><img src="<?php echo esc_url($partner_logo ); ?>" alt="" /></a>
							<?php else : ?>
								<img src="<?php echo esc_url($partner_logo ); ?>" alt="" />
							<?php endif; ?>
							
						</div>
					</div>
					
				<?php endforeach; ?>	
				</div>
			</div>					
		</div>
	</div>
</section>
<?php }