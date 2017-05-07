<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Page Header Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_page_options',
  'title'     => 'Page Header Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'tb_page_header',
      'fields' => array(
        array(
            'id'        => 'tb_custom_page_setting',
            'type'      => 'switcher',
            'default'   => true,
            'title'     => esc_html__('Custom Page Header Setting', 'the-boss'),
            'label'     => esc_html__('If you want to disable page header for this page switch "off" to this button', 'the-boss'),
        ),
        array(
            'id'        => 'tb_page_header_switch',
            'type'      => 'switcher',
            'default'   => true,
            'title'     => esc_html__('Default Page Header', 'the-boss'),
            'label'     => esc_html__('If you disable this switch, background image will come from theme option.', 'the-boss'),
            'dependency' => array( 'tb_custom_page_setting', '==', 'true' ), 
        ),
        array(
            'id'        => 'tb_page_header_bg',
            'type'      => 'image',
            'title'     => esc_html__('Page Header Background', 'the-boss'),
            'dependency' => array( 'tb_custom_page_setting|tb_page_header_switch', '==|==', 'true|true' ), 
        ),

      ),
    ),
  ),
);

// -----------------------------------------
// Home Slider Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_home_slier_options',
  'title'     => 'Home Slider Options',
  'post_type' => 'tb_home_slider',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'tb_home_sliders',
      'fields' => array(
        array(
            'id'        => 'slider_overlay',
            'type'      => 'switcher',
            'title'     => esc_html__('Slider Overlay :', 'the-boss'),
        ),
        array(
            'id'        => 'slider_subtitle',
            'type'      => 'textarea',
            'title'     => esc_html__('Slider Subtitle :', 'the-boss'),
        ),
        array(
            'id'        => 'slider_title',
            'type'      => 'text',
            'title'     => esc_html__('Slider Title :', 'the-boss'),
        ),
        array(
            'id'        => 'slider_description',
            'type'      => 'wysiwyg',
            'title'     => esc_html__('Slider Description :', 'the-boss'),
        ),
        array(
            'id'        => 'slider_btn_text',
            'type'      => 'text',
            'default'   => 'Puschase Now',
            'title'     => esc_html__('Slider Button Text :', 'the-boss'),
        ),
        array(
            'id'        => 'slider_btn_url',
            'type'      => 'text',
            'default'   => '#',
            'title'     => esc_html__('Slider Button Url :', 'the-boss'),
        ),

      ),
    ),
  ),
);

// -----------------------------------------
//The Boss Project Information                   -
// -----------------------------------------
$options[]    = array(
  'id'        => '_tb_project_options',
  'title'     => 'Project Information',
  'post_type' => 'tb_project',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'tb_project_info',
      'fields' => array(
        array(
            'id'        => 'project_desc',
            'type'      => 'wysiwyg',
            'title'     => esc_html__('Project Description :', 'the-boss'),
        ),
        array(
            'id'        => 'project_date',
            'type'      => 'text',
            'title'     => esc_html__('Project Date :', 'the-boss'),
        ),
        array(
            'id'        => 'project_client',
            'type'      => 'text',
            'title'     => esc_html__('Project Client :', 'the-boss'),
        ),
        array(
            'id'        => 'project_preview',
            'type'      => 'text',
            'title'     => esc_html__('Online Preview Url:', 'the-boss'),
        ),
        array(
          'id'              => 'project_download',
          'type'            => 'group',
          'title'           => esc_html__('Project Download Link :', 'the-boss'),
          'button_title'    => esc_html__('Add New', 'the-boss'),
          'accordion_title' => esc_html__('Add New Download Link', 'the-boss'),
          'fields'          => array(
                array(
                  'id'    => 'download_image',
                  'type'  => 'image',
                  'title' => esc_html__('File Icon', 'the-boss'),
                ),
                array(
                  'id'    => 'download_text',
                  'type'  => 'text',
                  'title' => esc_html__('Download Text', 'the-boss'),
                ),
                array(
                  'id'    => 'download_url',
                  'type'  => 'text',
                  'title' => esc_html__('Download Url', 'the-boss'),
                ),
              ),
         
        ),
      ),
    ),
  ),
);


// -----------------------------------------
//The Boss Service Information                   -
// -----------------------------------------
$options[]    = array(
  'id'        => '_tb_service_options',
  'title'     => 'Service Information',
  'post_type' => 'tb_service',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'tb_service_info',
      'fields' => array(
        array(
            'id'        => 'service_desc',
            'type'      => 'wysiwyg',
            'title'     => esc_html__('Service Description :', 'the-boss'),
        ),
        array(
          'id'              => 'service_question_answer',
          'type'            => 'group',
          'title'           => esc_html__('Service Accordion', 'the-boss'),
          'button_title'    => esc_html__('Add New', 'the-boss'),
          'accordion_title' => esc_html__('Add New Accordion', 'the-boss'),
          'fields'          => array(
                array(
                  'id'    => 'question',
                  'type'  => 'text',
                  'title' => esc_html__('Question', 'the-boss'),
                ),
                array(
                  'id'    => 'answer',
                  'type'  => 'textarea',
                  'title' => esc_html__('Answer', 'the-boss'),
                ),
              ),
         
        ),
        array(
          'id'              => 'service_download',
          'type'            => 'group',
          'title'           => esc_html__('Service Download Link :', 'the-boss'),
          'button_title'    => esc_html__('Add New', 'the-boss'),
          'accordion_title' => esc_html__('Add New Download Link', 'the-boss'),
          'fields'          => array(
                array(
                  'id'    => 'download_image',
                  'type'  => 'image',
                  'title' => esc_html__('File Icon', 'the-boss'),
                ),
                array(
                  'id'    => 'download_text',
                  'type'  => 'text',
                  'title' => esc_html__('Download Text', 'the-boss'),
                ),
                array(
                  'id'    => 'download_url',
                  'type'  => 'text',
                  'title' => esc_html__('Download Url', 'the-boss'),
                ),
              ),
         
        ),
      ),
    ),
  ),
);


CSFramework_Metabox::instance( $options );
