<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_the_boss_counter extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'counter_image'         => '',
            'the_boss_counter'      => '',
            'tb_class'              => '',                              
        ), $atts));
        
    	$the_boss_counter = (array) vc_param_group_parse_atts( $the_boss_counter );
        ob_start();
        the_boss_counter( $counter_image, $the_boss_counter, $tb_class );
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "the_boss_counter",
    "name"                  => esc_html__("The Boss : Counter", 'the-boss'),
    "class"                 => "",
    "category"              => esc_html__('The Boss', 'the-boss'),
    "params"                => array(
                array(
                    "type"          => "attach_image",
                    "heading"       => esc_html__("Background Image", 'the-boss'),
                    "param_name"    => "counter_image",
                    "description"   => esc_html__("Upload Counter Background Image", 'the-boss'),
                    "group" => esc_html__("Counter Section", 'the-boss'),
                ),
                array(
                    "type" => "param_group",
                    "heading"    => esc_html__("The Boss : Counter", 'the-boss'),
                    "param_name" => "the_boss_counter",
                    "group" => esc_html__("Counter", 'the-boss'),
                    "params" => array(

                array(
                    "type"          => "attach_image",
                    "heading"       => esc_html__("Counter Image", 'the-boss'),
                    "param_name"    => "counter_image",
                    "description"   => esc_html__("Upload Counter Image", 'the-boss'),
                ),
                array(
                    "type"          => "textfield",
                    "heading"       => esc_html__("Counter Number", 'the-boss'),
                    "param_name"    => "counter_number",
                    "description"   => esc_html__("Write your Counter Number", 'the-boss'),
                ),
                array(
                    "type"          => "textfield",
                    "heading"       => esc_html__("Counter Title", 'the-boss'),
                    "param_name"    => "counter_title",
                    "description"   => esc_html__("Write your copunter title", 'the-boss'),
                ),
                    
            ),
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