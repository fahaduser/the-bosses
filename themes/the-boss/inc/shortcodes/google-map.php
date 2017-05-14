<?php 
function the_boss_map( $tb_map_zoom, $tb_map_latitude, $tb_map_longitude, $tb_map_title ,$tb_map_icon , $tb_class ){ ;
	$tb_map_icon = wp_get_attachment_url( $tb_map_icon );
	?>

	<section>
		
		<div id="map_canvas" data-map-title="<?php echo esc_attr( $tb_map_title ); ?>"  data-map-icon="<?php echo esc_url( $tb_map_icon ); ?>" data-map-latitute="<?php echo esc_html( $tb_map_latitude ); ?>" data-map-longitude="<?php echo esc_html( $tb_map_longitude ); ?>" data-map-zoom="<?php echo esc_html( $tb_map_zoom ); ?>" >
          </div>
	</section>
	
<?php  }