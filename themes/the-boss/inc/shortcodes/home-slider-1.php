<?php

function tb_home_slider_1($limit, $order, $orderby) {?>
<section class="slider slideroverlay">
 <?php
      $tb_home_slider = new WP_Query(array(
            'post_type'          => 'tb_home_slider',
            'posts_per_page'     => $limit,
            'order'              => $order,
            'orderby'            => $orderby,
            ));
        if( $tb_home_slider -> have_posts()) : ?>
        <div class="slider-style-one" id="camera_wrap_4">
       <?php 
         while( $tb_home_slider -> have_posts()) : $tb_home_slider -> the_post();
            $home_slier_data    = get_post_meta( get_the_ID(),'_home_slier_options', true );
            $slider_overlay     = isset($home_slier_data['slider_overlay']) ? $home_slier_data['slider_overlay'] : '' ;
            $slider_subtitle    = isset($home_slier_data['slider_subtitle']) ? $home_slier_data['slider_subtitle'] : '' ;
            $slider_title       = isset($home_slier_data['slider_title']) ? $home_slier_data['slider_title'] : '' ;
            $slider_description = isset($home_slier_data['slider_description']) ? $home_slier_data['slider_description'] : '' ;
            $slider_btn_text    = isset($home_slier_data['slider_btn_text']) ? $home_slier_data['slider_btn_text'] : '' ;
            $slider_btn_url     = isset($home_slier_data['slider_btn_url']) ? $home_slier_data['slider_btn_url'] : '' ;

            $slider_thumb = wp_get_attachment_url(get_post_thumbnail_id( get_the_ID()));


         ?>
        <div data-src="<?php echo esc_url($slider_thumb ); ?>">
            <div class="text-div fadeFromTop <?php echo ($slider_overlay == 1) ? esc_attr('overlay-switch') : '' ; ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="slider-text row slider-text-one">
                                <h3 class="animated CustomfadeInRight"><?php echo wp_kses_post( $slider_subtitle ); ?></h3>
                                <h2 class="animated CustomfadeInRight delay1"><?php echo wp_kses_post( $slider_title ); ?></h2>
                                <?php echo wp_kses_post( $slider_description ); ?>
                                <a href="<?php echo esc_url( $slider_btn_url  ); ?>" class="button animated CustomfadeInRight delay3"><?php echo esc_html( $slider_btn_text ); ?></a>
                            </div>
                        </div>
                    </div>
                </div>                  
            </div>          
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div><!-- #camera_wrap_3 -->       
    <?php endif; ?>
</section>

<?php }
