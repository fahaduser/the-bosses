<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_the_boss_map extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'title'               => '',
            'subtitle'            => '',
            'section_bg'          => '',
            'the_boss_contacts'    => '',
            'tb_class'            => '',                              
        ), $atts));
        
    	$the_boss_contacts = (array) vc_param_group_parse_atts( $the_boss_contacts );
        $atts['content']  = $content;
        ob_start();
        the_boss_map( $title, $subtitle, $section_bg, $the_boss_contacts , $tb_class );
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
            "heading"    => esc_html__("Section Title ", 'the-boss'),
            "param_name" => "title",
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