<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_the_boss_features extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'the_boss_feature'    => '',
            'tb_class'            => '',                              
        ), $atts));
        
    	$the_boss_feature = (array) vc_param_group_parse_atts( $the_boss_feature );
        $atts['content']  = $content;
        ob_start();
        the_boss_features($the_boss_feature, $tb_class);
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "the_boss_features",
    "name"                  => esc_html__("The Boss : Features", 'the-boss'),
    "class"                 => "",
    "category"              => esc_html__('The Boss', 'the-boss'),
    "params" => array(
        array(
            "type" => "param_group",
            "heading"    => esc_html__("The Boss : Features", 'the-boss'),
            "param_name" => "the_boss_feature",
            "group" => esc_html__("About", 'the-boss'),
            "params" => array(
                array(
                    "type"          => "attach_image",
                    "heading"       => esc_html__("Feature Image", 'the-boss'),
                    "param_name"    => "feature_image",
                    "description"   => esc_html__("Upload Feature Image", 'the-boss'),
                ),
                array(
                    "type"          => "textfield",
                    "heading"       => esc_html__("Feature Title", 'the-boss'),
                    "param_name"    => "feature_title",
                    "description"   => esc_html__("Write your feature title", 'the-boss'),
                ),
                array(
                    "type"          => "textarea",
                    "heading"       => esc_html__("Feature Description", 'the-boss'),
                    "param_name"    => "feature_description",
                    "description"   => esc_html__("Write your feature description", 'the-boss'),
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