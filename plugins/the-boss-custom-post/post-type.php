<?php
/**
 * Plugin Name: The Boss Custom Post
 * Plugin URI: https://themeforest.net/user/codexcoder
 * Description: This plugin is for The Boss registration and custom post type
 * Author: CodexCoder
 * Author URI: http://codexcoder.com/
 * Version: 1.0.0
 * Text Domain: the-boss-custom-post
 */

// The Boss slider
if(!class_exists('The_Boss_Home_Slider_Post_Type')) :

    class The_Boss_Home_Slider_Post_Type {

        public static $post_type = 'tb_home_slider';
        public static $menu_position = 5;
        public static $text_domain = 'the-boss-custom-post';

        public static function register(){

        $labels = array(
        'name'               => esc_html__( 'Sliders',  self::$text_domain ),
        'singular_name'      => esc_html__( 'Slider', self::$text_domain  ),
        'menu_name'          => esc_html__( 'Sliders',  self::$text_domain  ),
        'name_admin_bar'     => esc_html__( 'Slider', self::$text_domain  ),
        'add_new'            => esc_html__( 'Add New',  self::$text_domain  ),
        'add_new_item'       => esc_html__( 'Add New Slider', self::$text_domain  ),
        'new_item'           => esc_html__( 'New Slider', self::$text_domain  ),
        'edit_item'          => esc_html__( 'Edit Slider', self::$text_domain  ),
        'view_item'          => esc_html__( 'View Slider', self::$text_domain  ),
        'all_items'          => esc_html__( 'All Sliders', self::$text_domain  ),
        'search_items'       => esc_html__( 'Search Sliders', self::$text_domain  ),
        'parent_item_colon'  => esc_html__( 'Parent Sliders:', self::$text_domain  ),
        'not_found'          => esc_html__( 'No Slide found.', self::$text_domain  ),
        'not_found_in_trash' => esc_html__( 'No Slide found in Trash.', self::$text_domain  )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => self::$post_type ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => self::$menu_position ,
        'supports'           => array('thumbnail' , 'title'),
        'menu_icon'          => 'dashicons-admin-home',

    );

    $args = apply_filters('presscore_post_type_'. self::$post_type. '_args', $args );

    register_post_type( self::$post_type, $args );

    flush_rewrite_rules();

        }
    }

endif;

// The Boss Portfolio
if(!class_exists('The_Boss_Portfolio_Post_Type')) :

    class The_Boss_Portfolio_Post_Type {

        public static $post_type = 'tb_portfolio';
        public static $menu_position = 5;
        public static $text_domain = 'the-boss-custom-post';

        public static function register(){

        $labels = array(
        'name'               => esc_html__( 'Portfolios',  self::$text_domain ),
        'singular_name'      => esc_html__( 'Portfolio', self::$text_domain  ),
        'menu_name'          => esc_html__( 'Portfolios',  self::$text_domain  ),
        'name_admin_bar'     => esc_html__( 'Portfolio', self::$text_domain  ),
        'add_new'            => esc_html__( 'Add New',  self::$text_domain  ),
        'add_new_item'       => esc_html__( 'Add New Portfolio', self::$text_domain  ),
        'new_item'           => esc_html__( 'New Portfolio', self::$text_domain  ),
        'edit_item'          => esc_html__( 'Edit Portfolio', self::$text_domain  ),
        'view_item'          => esc_html__( 'View Portfolio', self::$text_domain  ),
        'all_items'          => esc_html__( 'All Portfolios', self::$text_domain  ),
        'search_items'       => esc_html__( 'Search Portfolios', self::$text_domain  ),
        'parent_item_colon'  => esc_html__( 'Parent Portfolios:', self::$text_domain  ),
        'featured_image'     => esc_html__( 'Portfolio Image', self::$text_domain  ),
        'set_featured_image' => esc_html__( 'Set Portfolio Image', self::$text_domain  ),
        'remove_featured_image'=> esc_html__( 'Remove Portfolio Image', self::$text_domain  ),
        'not_found'          => esc_html__( 'No Portfolio found.', self::$text_domain  ),
        'not_found_in_trash' => esc_html__( 'No Portfolio found in Trash.', self::$text_domain  )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => self::$post_type ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => self::$menu_position ,
        'supports'           => array('thumbnail', 'title'),
        'menu_icon'          => 'dashicons-editor-paste-text',

    );

    $args = apply_filters('presscore_post_type_'. self::$post_type. '_args', $args );

    register_post_type( self::$post_type, $args );

    flush_rewrite_rules();

        }
    }

endif;


// The Boss Project
if(!class_exists('The_Boss_Projects_Post_Type')) :

    class The_Boss_Projects_Post_Type {

        public static $post_type        = 'tb_project';
        public static $texonomy_type    = 'tb_project_cat';
        public static $menu_position    = 5;
        public static $text_domain      = 'the-boss-custom-post';

        public static function register(){

        $labels = array(
        'name'               => esc_html__( 'Projects',  self::$text_domain ),
        'singular_name'      => esc_html__( 'Project', self::$text_domain  ),
        'menu_name'          => esc_html__( 'Projects',  self::$text_domain  ),
        'name_admin_bar'     => esc_html__( 'Project', self::$text_domain  ),
        'add_new'            => esc_html__( 'Add New',  self::$text_domain  ),
        'add_new_item'       => esc_html__( 'Project Information', self::$text_domain  ),
        'new_item'           => esc_html__( 'New Project', self::$text_domain  ),
        'edit_item'          => esc_html__( 'Edit Project', self::$text_domain  ),
        'view_item'          => esc_html__( 'View Project', self::$text_domain  ),
        'all_items'          => esc_html__( 'All Projects', self::$text_domain  ),
        'search_items'       => esc_html__( 'Search Projects', self::$text_domain  ),
        'parent_item_colon'  => esc_html__( 'Parent Projects:', self::$text_domain  ),
        'featured_image'     => esc_html__( 'Project Image', self::$text_domain  ),
        'set_featured_image' => esc_html__( 'Set Project Image', self::$text_domain  ),
        'remove_featured_image'=> esc_html__( 'Remove Project Image', self::$text_domain  ),
        'not_found'          => esc_html__( 'No Project found.', self::$text_domain  ),
        'not_found_in_trash' => esc_html__( 'No Project found in Trash.', self::$text_domain  )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => self::$post_type ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => self::$menu_position ,
        'supports'           => array('thumbnail', 'title'),
        'menu_icon'          => 'dashicons-image-flip-horizontal',

    );

    $args = apply_filters('presscore_post_type_'. self::$post_type. '_args', $args );

    register_post_type( self::$post_type, $args );

    flush_rewrite_rules();

    /**
     * Texonomy Register for Project
     */

    $port_labels = array(
        'name'              => esc_html__( 'Categories', self::$text_domain ),
        'singular_name'     => esc_html__( 'Category', self::$text_domain ),
        'search_items'      => esc_html__( 'Search Categories', self::$text_domain ),
        'all_items'         => esc_html__( 'All Categories', self::$text_domain ),
        'parent_item'       => esc_html__( 'Parent Category', self::$text_domain ),
        'parent_item_colon' => esc_html__( 'Parent Category:', self::$text_domain ),
        'edit_item'         => esc_html__( 'Edit Category', self::$text_domain ),
        'update_item'       => esc_html__( 'Update Category', self::$text_domain ),
        'add_new_item'      => esc_html__( 'Add New Category', self::$text_domain ),
        'new_item_name'     => esc_html__( 'New Category Name', self::$text_domain ),
        'menu_name'         => esc_html__( 'Categories', self::$text_domain ),
    );

    $port_args = array(
        'hierarchical'      => true,
        'labels'            => $port_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => self::$texonomy_type ),
    );

    register_taxonomy( self::$texonomy_type , array( self::$post_type ), $port_args );

        }
    }

endif;


// The Boss Service

if(!class_exists('The_Boss_Service_Post_Type')) :

    class The_Boss_Service_Post_Type {

        public static $post_type        = 'tb_service';
        public static $texonomy_type    = 'tb_service_cat';
        public static $menu_position    = 5;
        public static $text_domain      = 'the-boss-custom-post';

        public static function register(){

        $labels = array(
        'name'               => esc_html__( 'Services',  self::$text_domain ),
        'singular_name'      => esc_html__( 'Service', self::$text_domain  ),
        'menu_name'          => esc_html__( 'Services',  self::$text_domain  ),
        'name_admin_bar'     => esc_html__( 'Service', self::$text_domain  ),
        'add_new'            => esc_html__( 'Add New',  self::$text_domain  ),
        'add_new_item'       => esc_html__( 'Service Title', self::$text_domain  ),
        'new_item'           => esc_html__( 'New Service', self::$text_domain  ),
        'edit_item'          => esc_html__( 'Edit Service', self::$text_domain  ),
        'view_item'          => esc_html__( 'View Service', self::$text_domain  ),
        'all_items'          => esc_html__( 'All Services', self::$text_domain  ),
        'search_items'       => esc_html__( 'Search Services', self::$text_domain  ),
        'parent_item_colon'  => esc_html__( 'Parent Services:', self::$text_domain  ),
        'featured_image'     => esc_html__( 'Service Image', self::$text_domain  ),
        'set_featured_image' => esc_html__( 'Set Service Image', self::$text_domain  ),
        'remove_featured_image'=> esc_html__( 'Remove Service Image', self::$text_domain  ),
        'not_found'          => esc_html__( 'No Service found.', self::$text_domain  ),
        'not_found_in_trash' => esc_html__( 'No Service found in Trash.', self::$text_domain  )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => self::$post_type ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => self::$menu_position ,
        'supports'           => array('thumbnail', 'title'),
        'menu_icon'          => 'dashicons-editor-rtl',

    );

    $args = apply_filters('presscore_post_type_'. self::$post_type. '_args', $args );

    register_post_type( self::$post_type, $args );

    flush_rewrite_rules();

    /**
     * Texonomy Register for Service
     */

    $port_labels = array(
        'name'              => esc_html__( 'Categories', self::$text_domain ),
        'singular_name'     => esc_html__( 'Category', self::$text_domain ),
        'search_items'      => esc_html__( 'Search Categories', self::$text_domain ),
        'all_items'         => esc_html__( 'All Categories', self::$text_domain ),
        'parent_item'       => esc_html__( 'Parent Category', self::$text_domain ),
        'parent_item_colon' => esc_html__( 'Parent Category:', self::$text_domain ),
        'edit_item'         => esc_html__( 'Edit Category', self::$text_domain ),
        'update_item'       => esc_html__( 'Update Category', self::$text_domain ),
        'add_new_item'      => esc_html__( 'Add New Category', self::$text_domain ),
        'new_item_name'     => esc_html__( 'New Category Name', self::$text_domain ),
        'menu_name'         => esc_html__( 'Categories', self::$text_domain ),
    );

    $port_args = array(
        'hierarchical'      => true,
        'labels'            => $port_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => self::$post_type ),
    );

    register_taxonomy( self::$texonomy_type , array( self::$post_type ), $port_args );

        }
    }

endif;


/**
 * The Boss Post Type Register
 */

if(!function_exists('the_boss_custom_post_type')) :

	function the_boss_custom_post_type (){
        The_Boss_Home_Slider_Post_Type::register();
        The_Boss_Portfolio_Post_Type::register();
        The_Boss_Projects_Post_Type::register();
		The_Boss_Service_Post_Type::register();
	}
endif;

add_action( 'init','the_boss_custom_post_type');

