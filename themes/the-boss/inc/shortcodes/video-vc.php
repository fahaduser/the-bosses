<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_the_boss_video_section extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'section_bg'        => '',
            'title'             => '',
            'video_url'         => '',
            'tb_class'          => '',
        ), $atts));
        
        ob_start();
        the_boss_video_section($section_bg,$title,$video_url ,$tb_class);
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "the_boss_video_section",
    "name"                  => esc_html__("The Boss : Full width Video", 'the-boss'),
    "class"                 => "",
    "category"              => esc_html__('The Boss', 'the-boss'),
    "params" => array(
        array(
            "type"       => "attach_image",
            "heading"    => esc_html__("Section  Backgroung ", 'the-boss'),
            "param_name" => "section_bg",
        ),
        array(
            "type" => "textfield",
            "heading"    => esc_html__("Video Title ", 'the-boss'),
            "param_name" => "title",
        ),
        array(
            "type" => "textarea",
            "heading"    => esc_html__("Video Url", 'the-boss'),
            "param_name" => "video_url",
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