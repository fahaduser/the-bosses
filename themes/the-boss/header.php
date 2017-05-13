<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Boss
 */
$tb_is_loading_animation = 1;
$tb_header_style 		 = 1;
if(function_exists('cs_get_option')) :
	$tb_is_loading_animation = cs_get_option('tb_is_loading_animation');
	$tb_header_style 		 = cs_get_option('tb_header_style');

	if(is_page( )) :
		$tb_page_option 		= get_post_meta( get_the_ID() ,'_custom_page_options', true );
		$tb_custom_page_setting = isset($tb_page_option['tb_custom_page_setting']) ?  $tb_page_option['tb_custom_page_setting'] : '' ;
	endif;
	if( is_page() && $tb_custom_page_setting == 1 ) :
		$tb_page_header_switch = isset( $tb_page_option['tb_page_header_switch'] ) ? $tb_page_option['tb_page_header_switch'] : ''; 
		$tb_page_header_bg = isset( $tb_page_option['tb_page_header_bg'] ) ? $tb_page_option['tb_page_header_bg'] : ''; 
	else: 
		$tb_page_header_switch = cs_get_option('tb_deault_page_header');
	endif;
	if( empty($tb_page_header_bg) ) :
		$tb_page_header_bg = cs_get_option('tb_deault_page_header_bg');
	endif;
	$tb_page_header_bg = wp_get_attachment_url( $tb_page_header_bg );
endif;
?>

<!doctype html>
<html class="no-js" <?php language_attributes( ); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ; ?>/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class( ); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<!-- Header Section -->
		<!-- Preloader -->
		<?php if($tb_is_loading_animation == 1) : ?>
		<div id="loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
				<div class="object" id="object_five"></div>
				<div class="object" id="object_six"></div>
				<div class="object" id="object_seven"></div>
				<div class="object" id="object_eight"></div>
				<div class="object" id="object_big"></div>
				</div>
			</div>
		</div> 
		<?php endif; ?>
		
		<?php if(!empty($tb_header_style)) : ?>
			<?php get_template_part('template-parts/headers/header', $tb_header_style ); ?>
		<?php endif; ?>
		<!-- End Header Section -->
		<!-- Breadcrumb Section -->
		<?php if (!is_front_page() && $tb_page_header_switch == 1 && !is_404()) : ?>
		<section class="breadcrumb-section section" <?php if($tb_page_header_bg) : ?> style="background: url(<?php echo esc_url($tb_page_header_bg ); ?>);" <?php endif; ?>>
			<div class="container">
				<div class="breadcrumb-area">
					<?php if( !is_single() ) : ?>
					<h2 class="breadcrumb-title">
						<?php 
                          if(is_archive()){
                             the_archive_title();
                          }else if(is_home()){
                            wp_title();
                          }else if(is_page( )){
                            the_title();
                          }else if(is_search()){
                             printf( esc_html__( 'Search Results for: %s', 'the-boss' ), '<span>' . get_search_query() . '</span>' );
                          }else{
                            the_title();
                          }
                         ?>
					</h2>
					<?php endif; ?>
					<?php the_boss_breadcrumbs(); ?>
				</div>
			</div>
		</section>
		<?php endif; ?>
