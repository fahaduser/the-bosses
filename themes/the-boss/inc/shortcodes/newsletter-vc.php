<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_the_boss_newsletter extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'section_bg'    => '#62A0D1',
            'tb_class'      => '',
        ), $atts));
        
    	$the_boss_feature = (array) vc_param_group_parse_atts( $the_boss_feature );
        $atts['content']  = $content;
        ob_start();
        the_boss_newsletter( $section_bg,$tb_class );
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "the_boss_newsletter",
    "name"                  => esc_html__("The Boss : News Letter", 'the-boss'),
    "class"                 => "",
    "category"              => esc_html__('The Boss', 'the-boss'),
    "params" => array(

        array(
            "type"       => "colorpicker",
            "group"      => esc_html__("News Letter", 'the-boss'),
            "heading"    => esc_html__("Section Backgroung Color ", 'the-boss'),
            "param_name" => "section_bg",
        ),
        array(
            "type"              => "textfield",
            "heading"           => esc_html__("Extra Class Name:", 'the-boss'),
            "param_name"        => "tb_class",
            "group"             => esc_html__("Extra Class", 'the-boss'),
            "description"       => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'the-boss'),
        ),
    )
) );
endif;