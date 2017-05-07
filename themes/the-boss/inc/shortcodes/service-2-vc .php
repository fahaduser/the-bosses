<?php
/**
 * Visual Composer Shortcode of About Us Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_the_boss_service_2 extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'title'         => '',
            'subtitle'      => '',
            'limit'         => -1,
            'order'         => '',
            'orderby'       => '',
            'section_bg'    => '',
            'btn_text'      => '',
            'btn_url'       => '',
            'tb_class'      => '',
        ), $atts));
        
    	$the_boss_feature = (array) vc_param_group_parse_atts( $the_boss_feature );
        $atts['content']  = $content;
        ob_start();
        the_boss_service_2($title, $subtitle, $limit, $order ,$orderby , $section_bg, $btn_text,$btn_url ,$tb_class);
        return ob_get_clean();	         
    }
}

vc_map( array(
    "base"                  => "the_boss_service_2",
    "name"                  => esc_html__("The Boss : Service 2", 'the-boss'),
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
            "type"          => "textfield",
            "heading"       => esc_html__("Service Limit:", 'the-boss'),
            "param_name"    => "limit",
            "description"   => esc_html__("Write down the number of slide you want to display", 'the-boss'),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__( "Service Order", 'the-boss' ),
            "param_name"    => "order",                
            "value"         => array(
                esc_html__( "Select order",'the-boss')    => "",
                esc_html__( "DESC",'the-boss')            => "DESC",
                esc_html__( "ASC", 'the-boss' )           => "ASC",
            ),
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__( "Service Order By", 'the-boss' ),
            "param_name"    => "orderby",
            "value"         => array(
                esc_html__( "Select order by",'the-boss') => "",
                esc_html__( "Date", 'the-boss' )          => "date",
                esc_html__( "Name", 'the-boss' )          => "name",
                esc_html__( "Modified", 'the-boss' )      => "modified",
                esc_html__( "Author", 'the-boss' )        => "author",
                esc_html__( "Random", 'the-boss' )        => "rand",
            ),
        ),
        array(
            "type"       => "colorpicker",
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