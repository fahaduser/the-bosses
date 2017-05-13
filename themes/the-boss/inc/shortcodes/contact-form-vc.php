<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_the_boss_contact_form extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'title'               => '',
            'subtitle'            => '',
            'section_bg'          => '',
            'contact_scode'    => '',
            'tb_class'            => '',                              
        ), $atts));
        
        ob_start();
        the_boss_contact_form( $title, $subtitle, $section_bg, $contact_scode , $tb_class );
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "the_boss_contact_form",
    "name"                  => esc_html__("The Boss : Contact Form", 'the-boss'),
    "class"                 => "",
    "category"              => esc_html__('The Boss', 'the-boss'),
    "params" => array(
        array(
            "type" => "textfield",
            "heading"    => esc_html__("Section Title ", 'the-boss'),
            "param_name" => "title",
        ),
        array(
            "type" => "textarea",
            "heading"    => esc_html__("Section Sub-Title ", 'the-boss'),
            "param_name" => "subtitle",
        ),
        array(
            "type"       => "colorpicker",
            "heading"    => esc_html__("Section Backgroung Color ", 'the-boss'),
            "param_name" => "section_bg",
        ),
        array(
            "type"       => "textarea",
            "heading"    => esc_html__("Contact Form ShortCode ", 'the-boss'),
            "param_name" => "contact_scode",
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