<?php
/**
 * Visual Composer Shortcode of Home Slider Style 1
 */
if (function_exists('vc_map')) :
class WPBakeryShortCode_home_slier_2 extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        extract(shortcode_atts(array(
            'limit'            => '',
            'order'            => '',                              
            'orderby'          => '',                              
        ), $atts));
        
        $event_info = (array) vc_param_group_parse_atts( $event_info );
        $atts['content'] = $content;
        ob_start();
        tb_home_slider_2($limit, $order, $orderby);
        return ob_get_clean();           
    }
}

vc_map( array(
    "base"                  => "home_slier_2",
    "name"                  => esc_html__("Home Slider 2", 'the-boss'),
    "class"                 => "",
    "category"              => esc_html__('The Boss', 'the-boss'),
     "params"    => array(
         
            array(
                "type"          => "textfield",
                "heading"       => esc_html__("Limit:", 'the-boss'),
                "param_name"    => "limit",
                "description"   => esc_html__("Write down the number of slide you want to display", 'the-boss'),
            ),
            array(
                "type"          => "dropdown",
                "heading"       => esc_html__( "Order", 'the-boss' ),
                "param_name"    => "order",                
                "value"     => array(
                    esc_html__( "Select order",'the-boss')    => "",
                    esc_html__( "DESC",'the-boss')    => "DESC",
                    esc_html__( "ASC", 'the-boss' )   => "ASC",
                ),
            ),
            array(
                "type"          => "dropdown",
                "heading"       => esc_html__( "Order By", 'the-boss' ),
                "param_name"    => "orderby",
                "value"     => array(
                    esc_html__( "Select order by",'the-boss') => "",
                    esc_html__( "Date", 'the-boss' )      => "date",
                    esc_html__( "Name", 'the-boss' )      => "name",
                    esc_html__( "Modified", 'the-boss' )  => "modified",
                    esc_html__( "Author", 'the-boss' )    => "author",
                    esc_html__( "Random", 'the-boss' )    => "rand",
                ),
            ),
        )
) );
endif;