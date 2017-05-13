<?php 

function the_boss_features($the_boss_feature, $tb_class){ ?>
	<section class="feature-section section <?php echo (!empty( $tb_class )) ? esc_attr( $tb_class ) : ''; ?>">
		<div class="container">
			<div class="row">
				<?php foreach( $the_boss_feature as $single_data ) : 
					$feature_image = wp_get_attachment_url( $single_data['feature_image'] );
				?>
					<div class="col-md-3 col-sm-6">
						<div class="single-feature row">
							<img src="<?php echo esc_url( $feature_image ); ?>" alt="" />
							<h3><?php echo wp_kses_post($single_data['feature_title'] ); ?></h3>
							<p><?php echo wp_kses_post($single_data['feature_description'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php }