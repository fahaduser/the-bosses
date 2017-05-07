<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => 'The Boss Option Panel <small>by Codestar</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// General Options
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

//General Section

$options[]      = array(
    'name'        => 'tb_general_settings',
    'title'       => esc_html__('General Settings', 'the-boss'),
    'icon'          => 'fa fa-cogs',
    'fields'      => array(
        array(
            'id'    => 'tb_is_loading_animation',
            'type'  => 'switcher',
            'title' => esc_html__('Loading Animation', 'the-boss'),
            'default' => true
        ),
        // Back to top button
        array(
          'type'    => 'subheading',
          'content' => esc_html__('Back to top button', 'the-boss'),
        ),
        array(
            'id'    => 'tb_is_btotop_button',
            'type'  => 'switcher',
            'title' => esc_html__('Back to top button', 'the-boss'),
            'default' => true
        ),
        // Page Header Settings
        array(
          'type'    => 'subheading',
          'content' => esc_html__('Default Page Header', 'the-boss'),
        ),
        array(
            'id'        => 'tb_deault_page_header',
            'type'      => 'switcher',
            'default'   => true,
            'title'     => esc_html__('Default Page Header', 'the-boss'),
            'label'     => esc_html__('If you want to disable page header for this page switch "off" to this button', 'the-boss'),
        ),
        array(
            'id'        => 'tb_deault_page_header_bg',
            'type'      => 'image',
            'title'     => esc_html__('Page Header Background', 'the-boss'),
            'dependency' => array( 'tb_deault_page_header', '==', 'true' ), 
        ),
    
            
    ),
);


//Header Section

$options[]      = array(
    'name'        => 'tb_header_settings',
    'title'       => esc_html__('Header Settings', 'the-boss'),
    'icon'          => 'fa fa-cogs',
    'fields'      => array(

        array(
          'type'    => 'heading',
          'content' => esc_html__('Header Style', 'the-boss'),
        ),
        array(
            'id'    => 'tb_header_style',
            'type'  => 'radio',
            'class'  => 'horizontal',
            'title' => esc_html__('Header Style', 'the-boss'),
            'default' => 1,
            'options' => array(
                    1       => esc_html__('Header Style 1', 'the-boss'),
                    2       => esc_html__('Header Style 2', 'the-boss'),
                    3       => esc_html__('Header Style 3', 'the-boss'),
            ),
        ),
        // Header one logo
        array(
            'id'    => 'tb_header_one_logo',
            'type'  => 'image',
            'title' => esc_html__('Header One Logo', 'the-boss'),
            'add_title' => esc_html__('Add Logo', 'the-boss'),
            'dependency' => array('tb_header_style_1', '==' , true),
        ),
        array(
            'id'          => 'tb_header_one_logo_sticky',
            'type'        => 'image',
            'title'       => esc_html__('Header One Sticky Logo', 'the-boss'),
            'desc' => esc_html__('If you don\'t upload Sticky Logo, Normal logo will show as a sticky logo', 'the-boss'),
            'add_title'   => esc_html__('Add Sticky Logo', 'the-boss'),
            'dependency'  => array('tb_header_style_1', '==' , true),
        ),
        // Header two logo 
        array(
            'id'         => 'tb_header_two_top_bar',
            'type'       => 'switcher',
            'default'    => 1,
            'title'      => esc_html__('Header Top Bar', 'the-boss'),
            'dependency' => array('tb_header_style_2', '==' , true),
        ),
        array(
            'id'        => 'tb_header_two_logo',
            'type'      => 'image',
            'title'     => esc_html__('Header Two Logo', 'the-boss'),
            'add_title' => esc_html__('Add Logo', 'the-boss'),
            'dependency'=> array('tb_header_style_2', '==' , true),
        ),
        array(
            'id'          => 'tb_header_two_logo_sticky',
            'type'        => 'image',
            'title'       => esc_html__('Header Two Sticky Logo', 'the-boss'),
            'desc' => esc_html__('If you don\'t upload Sticky Logo, Normal logo will show as a sticky logo', 'the-boss'),
            'add_title'   => esc_html__('Add Sticky Logo', 'the-boss'),
            'dependency'  => array('tb_header_style_2', '==' , true),
        ),
        array(
            'id'    => 'tb_header_two_desc',
            'type'  => 'text',
            'title' => esc_html__('Header Two Description', 'the-boss'),
            'dependency' => array('tb_header_style_2|tb_header_two_top_bar', '==|==' , 'true|true'),
        ),
        array(
          'id'              => 'tb_header_two_social',
          'type'            => 'group',
          'dependency' => array('tb_header_style_2|tb_header_two_top_bar', '==|==' , 'true|true'),
          'title'           => esc_html__('Social Profile', 'the-boss'),
          'button_title'    => esc_html__('Add New', 'the-boss'),
          'accordion_title' => esc_html__('Add New Social Item', 'the-boss'),
          'fields'          => array(
                array(
                  'id'    => 'social_icon',
                  'type'  => 'icon',
                  'title' => esc_html__('Select icon', 'the-boss'),
                ),
                array(
                  'id'    => 'social_url',
                  'type'  => 'text',
                  'title' => esc_html__('Social Url', 'the-boss'),
                ),),
          'default'   => array(
                array(
                    'social_icon'      => esc_attr('fa fa-facebook' ),
                    'social_url'      => esc_url('http://facebook.com' ),
                ),
            )
        ),
        // Header three logo
        array(
            'id'    => 'tb_header_three_logo',
            'type'  => 'image',
            'title' => esc_html__('Header Three Logo', 'the-boss'),
            'add_title' => esc_html__('Add Logo', 'the-boss'),
            'dependency' => array('tb_header_style_3', '==' , true),
        ),
        array(
            'id'          => 'tb_header_three_logo_sticky',
            'type'        => 'image',
            'title'       => esc_html__('Header Three Sticky Logo', 'the-boss'),
            'desc' => esc_html__('If you don\'t upload Sticky Logo, Normal logo will show as a sticky logo', 'the-boss'),
            'add_title'   => esc_html__('Add Sticky Logo', 'the-boss'),
            'dependency'  => array('tb_header_style_3', '==' , true),
        ),
        array(
            'id'    => 'tb_header_three_desc',
            'type'  => 'text',
            'title' => esc_html__('Header Three Description', 'the-boss'),
            'dependency' => array('tb_header_style_3', '==' , 'true'),
        ),
        array(
          'id'              => 'tb_header_three_social',
          'type'            => 'group',
          'dependency' => array('tb_header_style_3', '==' , 'true'),
          'title'           => esc_html__('Social Profile', 'the-boss'),
          'button_title'    => esc_html__('Add New', 'the-boss'),
          'accordion_title' => esc_html__('Add New Social Item', 'the-boss'),
          'fields'          => array(
                array(
                  'id'    => 'social_icon',
                  'type'  => 'icon',
                  'title' => esc_html__('Select icon', 'the-boss'),
                ),
                array(
                  'id'    => 'social_url',
                  'type'  => 'text',
                  'title' => esc_html__('Social Url', 'the-boss'),
                ),),
          'default'   => array(
                array(
                    'social_icon'      => esc_attr('fa fa-facebook' ),
                    'social_url'      => esc_url('http://facebook.com' ),
                ),
            )
        ),
        
        // Header one information
        array(
          'type'    => 'heading',
          'content' => esc_html__('Header One Information', 'the-boss'),
          'dependency' => array('tb_header_style_1', '==' , true),
        ),
        array(
            'id'    => 'tb_office_schedule_icon_1',
            'type'  => 'image',
            'title' => esc_html__('Office Schedule Icon', 'the-boss'),
            'dependency' => array('tb_header_style_1', '==' , true),
        ),
        array(
            'id'    => 'tb_office_schedule_title_1',
            'type'  => 'text',
            'title' => esc_html__('Office Schedule Title', 'the-boss'),
            'dependency' => array('tb_header_style_1', '==' , true),
        ),
        array(
            'id'    => 'tb_office_schedule_desc_1',
            'type'  => 'text',
            'title' => esc_html__('Office Schedule Description', 'the-boss'),
            'dependency' => array('tb_header_style_1', '==' , true),
        ),
        array(
            'id'    => 'tb_office_contact_icon_1',
            'type'  => 'image',
            'title' => esc_html__('Office Contact Icon', 'the-boss'),
            'dependency' => array('tb_header_style_1', '==' , true),
        ),
        array(
            'id'    => 'tb_office_contact_title_1',
            'type'  => 'text',
            'title' => esc_html__('Office Contact Title', 'the-boss'),
            'dependency' => array('tb_header_style_1', '==' , true),
        ),
        array(
            'id'    => 'tb_office_contact_desc_1',
            'type'  => 'text',
            'title' => esc_html__('Office Contact Description', 'the-boss'),
            'dependency' => array('tb_header_style_1', '==' , true),
        ),
        array(
            'id'    => 'tb_office_location_icon_1',
            'type'  => 'image',
            'title' => esc_html__('Office Location Icon', 'the-boss'),
            'dependency' => array('tb_header_style_1', '==' , true),
        ),
        array(
            'id'    => 'tb_office_location_title_1',
            'type'  => 'text',
            'title' => esc_html__('Office Location Title', 'the-boss'),
            'dependency' => array('tb_header_style_1', '==' , true),
        ),
        array(
            'id'    => 'tb_office_location_desc_1',
            'type'  => 'text',
            'title' => esc_html__('Office Location Description', 'the-boss'),
            'dependency' => array('tb_header_style_1', '==' , true),
        ),

        
        // Header Two information
        array(
          'type'    => 'heading',
          'content' => esc_html__('Header Two Information', 'the-boss'),
          'dependency' => array('tb_header_style_2', '==' , true),
        ),
        array(
            'id'    => 'tb_office_schedule_icon_2',
            'type'  => 'image',
            'title' => esc_html__('Office Schedule Icon', 'the-boss'),
            'dependency' => array('tb_header_style_2', '==' , true),
        ),
        array(
            'id'    => 'tb_office_schedule_title_2',
            'type'  => 'text',
            'title' => esc_html__('Office Schedule Title', 'the-boss'),
            'dependency' => array('tb_header_style_2', '==' , true),
        ),
        array(
            'id'    => 'tb_office_schedule_desc_2',
            'type'  => 'text',
            'title' => esc_html__('Office Schedule Description', 'the-boss'),
            'dependency' => array('tb_header_style_2', '==' , true),
        ),
        array(
            'id'    => 'tb_office_contact_icon_2',
            'type'  => 'image',
            'title' => esc_html__('Office Contact Icon', 'the-boss'),
            'dependency' => array('tb_header_style_2', '==' , true),
        ),
        array(
            'id'    => 'tb_office_contact_title_2',
            'type'  => 'text',
            'title' => esc_html__('Office Contact Title', 'the-boss'),
            'dependency' => array('tb_header_style_2', '==' , true),
        ),
        array(
            'id'    => 'tb_office_contact_desc_2',
            'type'  => 'text',
            'title' => esc_html__('Office Contact Description', 'the-boss'),
            'dependency' => array('tb_header_style_2', '==' , true),
        ),
        array(
            'id'    => 'tb_office_location_icon_2',
            'type'  => 'image',
            'title' => esc_html__('Office Location Icon', 'the-boss'),
            'dependency' => array('tb_header_style_2', '==' , true),
        ),
        array(
            'id'    => 'tb_office_location_title_2',
            'type'  => 'text',
            'title' => esc_html__('Office Location Title', 'the-boss'),
            'dependency' => array('tb_header_style_2', '==' , true),
        ),
        array(
            'id'    => 'tb_office_location_desc_2',
            'type'  => 'text',
            'title' => esc_html__('Office Location Description', 'the-boss'),
            'dependency' => array('tb_header_style_2', '==' , true),
        ),

        array(
          'type'    => 'subheading',
          'content' => esc_html__('Menu Search Option', 'the-boss'),
        ),
        array(
            'id'    => 'tb_menu_search_icon',
            'type'  => 'switcher',
            'title' => esc_html__('Search option', 'the-boss'),
            'default' => 1,
            
        ),
        array(
            'id'    => 'tb_menu_mini_cart',
            'type'  => 'switcher',
            'title' => esc_html__('Mini-cart option', 'the-boss'),
            'default' => 1,
            
        ),    
            
    ),
);


//Blog Page Layout

$options[]      = array(
    'name'        => 'blog_page_setting',
    'title'       => esc_html__('Blog Page Layout', 'the-boss'),
    'icon'          => 'fa fa-spinner',
    'fields'      => array(
          
        array(
          'type'    => 'heading',
          'content' => esc_html__('Blog Page Layout', 'the-boss'),
        ),
        array(
            'id'        => 'tb_blog_layout',
            'type'      => 'radio',
            'class'     => 'horizontal',
            'default'     => '1',
            'title'     => esc_html__('Blog Layout', 'the-boss'),
            'options'   => array(
                    1        => esc_html__('Blog with right sidebar', 'the-boss'),
                    2        => esc_html__('Blog fullwidth', 'the-boss'),
              ),
        ),

    ),
);

// Typography

$options[]      = array(
    'name'        => 'tb_typography',
    'title'       => esc_html__('Typography', 'the-boss'),
    'icon'          => 'fa fa-check',
    'fields'      => array(        
        array(
            'type'    => 'heading',
            'content'   => esc_html__('Body', 'the-boss'),
        ),        
        array(
            'id'        => 'tb_body_font_family',
            'type'      => 'typography',
            'title'     => esc_html__('Body font family:', 'the-boss'),
            'default'   => array(
                'family'  => 'Lato',
                'font'    => 'google', // this is helper for output ( google, websafe, custom )                
            ),
            'variant'   => false,
        ),
        array(
            'id'      => 'tb_body_font_size',
            'type'    => 'number',
            'title'   => esc_html__('Body font size:', 'the-boss'),
            'default'   => '16',
            'after'   => ' <i class="cs-text-muted">(px)</i>',                
        ),
        array(
            'id'      => 'tb_primary_color',
            'type'    => 'color_picker',
            'title'   => esc_html__('Primary Color:', 'the-boss'),
            'default'   => '#009BDE',
        ),        
        array(
            'type'    => 'heading',
            'content'   => esc_html__('Title', 'the-boss'),
        ),
        array(
            'id'        => 'tb_title_font_family',
            'type'      => 'typography',
            'title'     => esc_html__('Title font family:', 'the-boss'),
            'default'   => array(
                'family'  => 'Lato',
                'font'    => 'google', // this is helper for output ( google, websafe, custom )
            ),
            'variant'   => false,
        ),
        array(
            'id'             => 'tb_title_font_weight',
            'type'           => 'select',
            'title'          =>  esc_html__('Title font weight:', 'the-boss'),
            'options'     => array(
                '500'  =>  esc_html__('500', 'the-boss'),
                '100'  =>  esc_html__('100', 'the-boss'),                
                '300'  =>  esc_html__('300', 'the-boss'),                              
                '400'  =>  esc_html__('400', 'the-boss'),                
                '600'  =>  esc_html__('600', 'the-boss'),
                '700'  =>  esc_html__('700', 'the-boss'),                
                '800'  =>  esc_html__('800', 'the-boss'),                
                '900'  =>  esc_html__('900', 'the-boss'),                
            ),
            'default'    => '700'
        ),
        array(
            'id'      => 'tb_title_font_size',
            'type'    => 'number',
            'title'   => esc_html__('Title font size:', 'the-boss'),
            'default'   => '36',
            'after'   => ' <i class="cs-text-muted">(px)</i>',                
        ),
        array(
            'id'          => 'tb_title_font_style',
            'type'        => 'select',
            'title'       => esc_html__('Title font-style:', 'the-boss'),
            'options'     => array(
                'normal'  => esc_html__('Normal', 'the-boss'),
                'italic'  => esc_html__('Italic', 'the-boss'),
                'oblique' => esc_html__('Oblique', 'the-boss'),                               
            ),
            'default'  => 'normal',
        ),     
        array(
            'type'    => 'heading',
            'content'   => esc_html__('Menu', 'the-boss'),
        ),
        array(
            'id'        => 'tb_menu_font_family',
            'type'      => 'typography',
            'title'     => esc_html__('Menu font family:', 'the-boss'),
            'default'   => array(
                'family'  => 'Lato',
                'font'    => 'google', // this is helper for output ( google, websafe, custom )
            ),
            'variant'   => false,
        ), 
        array(
            'id'             => 'tb_menu_font_weight',
            'type'           => 'select',
            'title'          =>  esc_html__('Menu Font weight:', 'the-boss'),
            'options'     => array(
                '500'  =>  esc_html__('500', 'the-boss'),
                '100'  =>  esc_html__('100', 'the-boss'),                
                '300'  =>  esc_html__('300', 'the-boss'),                              
                '400'  =>  esc_html__('400', 'the-boss'),                
                '600'  =>  esc_html__('600', 'the-boss'),
                '700'  =>  esc_html__('700', 'the-boss'),                
                '800'  =>  esc_html__('800', 'the-boss'),                
                '900'  =>  esc_html__('900', 'the-boss'),                
            ),
            'default'    => '700'
        ),
        array(
            'id'      => 'tb_menu_font_size',
            'type'    => 'number',
            'title'   => esc_html__('Menu font size:', 'the-boss'),
            'default'   => '16',
            'after'   => ' <i class="cs-text-muted">(px)</i>',                
        ),
        array(
            'id'             => 'tb_menu_transform',
            'type'           => 'select',
            'title'          => esc_html__('Menu text-transform:', 'the-boss'),
            'options'     => array(
                'uppercase'  => esc_html__('Uppercase', 'the-boss'),
                'none'       => esc_html__('None', 'the-boss'),
                'capitalize' => esc_html__('Capitalize', 'the-boss'),                
                'lowercase'  => esc_html__('Lowercase', 'the-boss'),
            ),
            'default'  => 'Capitalize',
        ),
    ),        
);


//Footer Section
$options[]        = array(
    'name'        => 'footer',
    'title'       => esc_html__('Footer Section', 'the-boss'),
    'icon'        => 'fa fa-copyright',
    'fields'      => array(
        array(
            'type'      => 'heading',
            'content'   => esc_html__('Footer Section', 'the-boss'),
          ),
        
        array(
            'id'        => 'footer_copyright_text',
            'type'      => 'textarea',
            'title'     => esc_html__('Copyright text', 'the-boss'),
            'desc'      => esc_html__('Write your copyright text for footer. It is a html tag supported area.', 'the-boss'),
        ),
        array(
          'id'              => 'footer_social',
          'type'            => 'group',
          'title'           => esc_html__('Social Profile', 'the-boss'),
          'button_title'    => esc_html__('Add New', 'the-boss'),
          'accordion_title' => esc_html__('Add New Social Item', 'the-boss'),
          'fields'          => array(
                array(
                  'id'    => 'social_icon',
                  'type'  => 'icon',
                  'title' => esc_html__('Select icon', 'the-boss'),
                ),
                array(
                  'id'    => 'social_url',
                  'type'  => 'text',
                  'title' => esc_html__('Social Url', 'the-boss'),
                ),),
          'default'   => array(
                array(
                    'social_icon'      => esc_attr('fa fa-facebook' ),
                    'social_url'      => esc_url('http://facebook.com' ),
                ),
            )
        ),
    ),
);

CSFramework::instance( $settings, $options );