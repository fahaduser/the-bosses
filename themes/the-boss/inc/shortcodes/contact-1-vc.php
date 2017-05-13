<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_the_boss_contact extends WPBakeryShortCode {

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
        the_boss_contact( $title, $subtitle, $section_bg, $the_boss_contacts , $tb_class );
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "the_boss_contact",
    "name"                  => esc_html__("The Boss : Contact", 'the-boss'),
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
            "type" => "param_group",
            "heading"    => esc_html__("The Boss : Contact", 'the-boss'),
            "param_name" => "the_boss_contacts",
            "group" => esc_html__("Contact", 'the-boss'),
            "params" => array(
                array(
                    "type"          => "attach_image",
                    "heading"       => esc_html__("Contact Image", 'the-boss'),
                    "param_name"    => "contact_image",
                    "description"   => esc_html__("Upload Contact Image", 'the-boss'),
                ),
                array(
                    "type"          => "textfield",
                    "heading"       => esc_html__("Contact Title", 'the-boss'),
                    "param_name"    => "contact_title",
                    "description"   => esc_html__("Write your contact title", 'the-boss'),
                ),
                array(
                    "type"          => "textarea",
                    "heading"       => esc_html__("Contact Description", 'the-boss'),
                    "param_name"    => "contact_description",
                    "description"   => esc_html__("Write your contact description", 'the-boss'),
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