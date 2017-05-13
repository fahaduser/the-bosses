<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_the_boss_partners extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'title'         => '',
            'subtitle'      => '',
            'section_bg'      => '',
            'partners'      => '',
            'tb_class'      => '',                              
        ), $atts));
        
    	$partners = (array) vc_param_group_parse_atts( $partners );
        $atts['content']  = $content;
        ob_start();
        the_boss_partners( $title, $subtitle, $section_bg , $partners , $tb_class );
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "the_boss_partners",
    "name"                  => esc_html__("The Boss : Partners", 'the-boss'),
    "class"                 => "",
    "category"              => esc_html__('The Boss', 'the-boss'),
    "params" => array(
        array(
            "type" => "textfield",
            "heading"    => esc_html__("Section Title ", 'the-boss'),
            "group" => esc_html__("Section Information", 'the-boss'),
            "param_name" => "title",
        ),
        array(
            "type" => "textarea",
            "heading"    => esc_html__("Section Sub-Title ", 'the-boss'),
            "group" => esc_html__("Section Information", 'the-boss'),
            "param_name" => "subtitle",
        ),
        array(
            "type"       => "colorpicker",
            "heading"    => esc_html__("Section Backgroung Color ", 'the-boss'),
            "group" => esc_html__("Section Information", 'the-boss'),
            "param_name" => "section_bg",
        ),
        array(
            "type" => "param_group",
            "heading"    => esc_html__("The Boss : Partners", 'the-boss'),
            "param_name" => "partners",
            "group" => esc_html__("Partmers Logo", 'the-boss'),
            "params" => array(
                array(
                    "type"          => "attach_image",
                    "heading"       => esc_html__("Partner Logo", 'the-boss'),
                    "param_name"    => "partner_logo",
                    "description"   => esc_html__("Upload Partner Logo", 'the-boss'),
                ),
                array(
                    "type"          => "textfield",
                    "heading"       => esc_html__("Partner Url", 'the-boss'),
                    "param_name"    => "partner_url",
                    "description"   => esc_html__("Write your Partner Url", 'the-boss'),
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