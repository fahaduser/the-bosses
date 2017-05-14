<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_the_boss_map extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(

            'tb_map_zoom'              => '',
            'tb_map_latitude'          => '',
            'tb_map_longitude'         => '',
            'tb_map_title'             => '',
            'tb_map_icon'              => '',   

        ), $atts));
        
        ob_start();
        the_boss_map( $tb_map_zoom, $tb_map_latitude, $tb_map_longitude, $tb_map_title ,$tb_map_icon , $tb_class );
        return ob_get_clean();	         
    }
}


vc_map( array(
    "base"                  => "the_boss_map",
    "name"                  => esc_html__("The Boss : Google Map", 'the-boss'),
    "class"                 => "",
    "category"              => esc_html__('The Boss', 'the-boss'),
    "params" => array(
        array(
            "type" => "textfield",
            "heading"    => esc_html__("Map Zoom ", 'the-boss'),
            "param_name" => "tb_map_zoom",
        ),
        array(
            "type" => "textfield",
            "heading"    => esc_html__("Latitude ", 'the-boss'),
            "param_name" => "tb_map_latitude",
        ),
        array(
            "type" => "textfield",
            "heading"    => esc_html__("Longitude ", 'the-boss'),
            "param_name" => "tb_map_longitude",
        ),
        array(
            "type" => "textfield",
            "heading"    => esc_html__("Map Title: ", 'the-boss'),
            "param_name" => "tb_map_title",
        ),
        array(
            "type" => "attach_image",
            "heading"    => esc_html__("Map Icon: ", 'the-boss'),
            "param_name" => "tb_map_icon",
        ),
        array(
            "type"              => "textfield",
            "heading"           => esc_html__("Extra Class Name:", 'the-boss'),
            "param_name"        => "tb_class",
            "group" => esc_html__("Extra Class", 'the-boss'),
            "description"       => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'the-boss'),
        ),
    )
) );
endif;