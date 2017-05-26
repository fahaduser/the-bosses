<?php 
$tb_menu_search_icon 		= 1;
$tb_menu_mini_cart   		= 1;
$tb_header_two_logo     	= '';
$tb_header_two_logo_sticky  = '';
$tb_header_two_top_bar  	= '';
$tb_header_two_desc     	= '';
$tb_header_two_social   	= '';

$tb_office_schedule_icon_2  = '';
$tb_office_schedule_title_2 = '';
$tb_office_schedule_desc_2  = '';

$tb_office_contact_icon_2   = '';
$tb_office_contact_title_2  = '';
$tb_office_contact_desc_2   = '';

$tb_office_location_icon_2  = '';
$tb_office_location_title_2 = '';
$tb_office_location_desc_2  = '';

if(function_exists('cs_get_option')) :
	$tb_menu_search_icon 		= cs_get_option('tb_menu_search_icon');
	$tb_menu_mini_cart 	 		= cs_get_option('tb_menu_mini_cart');
	$tb_header_two_logo 		= cs_get_option('tb_header_two_logo');
	$tb_header_two_logo  		= wp_get_attachment_url($tb_header_two_logo );
	$tb_header_two_logo_sticky 	= cs_get_option('tb_header_two_logo_sticky');
	$tb_header_two_logo_sticky  = wp_get_attachment_url($tb_header_two_logo_sticky );

	$tb_header_two_top_bar  	= cs_get_option('tb_header_two_top_bar');
	$tb_header_two_desc  		= cs_get_option('tb_header_two_desc');
	$tb_header_two_social  		= cs_get_option('tb_header_two_social');

	$tb_office_schedule_title_2 = cs_get_option('tb_office_schedule_title_2');
	$tb_office_schedule_desc_2  = cs_get_option('tb_office_schedule_desc_2');
	$tb_office_schedule_icon_2  = cs_get_option('tb_office_schedule_icon_2');
	$tb_office_schedule_icon_2  = wp_get_attachment_url($tb_office_schedule_icon_2 );

	$tb_office_contact_title_2  = cs_get_option('tb_office_contact_title_2');
	$tb_office_contact_desc_2   = cs_get_option('tb_office_contact_desc_2');
	$tb_office_contact_icon_2   = cs_get_option('tb_office_contact_icon_2');
	$tb_office_contact_icon_2   = wp_get_attachment_url($tb_office_contact_icon_2 );

	$tb_office_location_title_2 = cs_get_option('tb_office_location_title_2');
	$tb_office_location_desc_2  = cs_get_option('tb_office_location_desc_2');
	$tb_office_location_icon_2  = cs_get_option('tb_office_location_icon_2');
	$tb_office_location_icon_2  = wp_get_attachment_url($tb_office_location_icon_2 );
endif;

 ?>
		<header id="header-style-two">
			<?php if($tb_header_two_top_bar == 1) : ?>
				<div class="header-welcome">
					<div class="container">
					    <div class="row">
					        <div class="welcome-text">
					            <p><?php echo esc_html($tb_header_two_desc) ;?></p>
					        </div>
					        <?php if($tb_header_two_social) : ?>
						        <div class="welcome-social">
		                            <ul>
		                            	<?php foreach( $tb_header_two_social as $social_single ) : ?>
		                                	<li><a href="<?php echo esc_url($social_single['social_url'] ); ?>"><i class="<?php echo esc_attr($social_single['social_icon'] ); ?>" aria-hidden="true"></i></a></li>
										<?php endforeach; ?>
		                            </ul>
						        </div>
					    	<?php endif; ?>
					    </div>
					</div>
				</div>
			<?php endif; ?>
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="logo">
							<?php if($tb_header_two_logo) : ?>
								<a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url( $tb_header_two_logo ); ?>" alt="" /></a>
							<?php else : ?>
								<a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a>
							<?php endif ?>
						</div>
						<div class="header-top-right">
							<ul>
								<li>
									<img src="<?php echo esc_url( $tb_office_schedule_icon_2 ); ?>" alt="" />
									<div class="header-top-contact">
										<h4><?php echo esc_html($tb_office_schedule_title_2); ?></h4>
										<h5><?php echo esc_html($tb_office_schedule_desc_2); ?></h5>
									</div>
								</li>
								<li>
									<img src="<?php echo esc_url( $tb_office_contact_icon_2 ); ?>" alt="" />
									<div class="header-top-contact">
										<h4><?php echo esc_html($tb_office_contact_title_2); ?></h4>
										<h5><?php echo esc_html($tb_office_contact_desc_2); ?></h5>
									</div>
								</li>
								<li>
									<img src="<?php echo esc_url( $tb_office_location_icon_2 ); ?>" alt="" />
									<div class="header-top-contact">
										<h4><?php echo esc_html($tb_office_location_title_2); ?></h4>
										<h5><?php echo esc_html($tb_office_location_desc_2); ?></h5>
									</div>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>			
			<div class="mainmenu-area" id="sohag">
				<div class="container">
					<div class="row">
						<a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo ($tb_header_two_logo_sticky) ? esc_url($tb_header_two_logo_sticky) : esc_url($tb_header_two_logo)?>" alt="" /></a>
						<div class="nav-menu">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'the-boss' ); ?></span>
								<span class="icon-bar-one bar-stick"></span>
								<span class="icon-bar-two bar-stick"></span>
								<span class="icon-bar-three bar-stick"></span>
							  </button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<?php if(has_nav_menu( 'primary_menu' )) : ?>
									<?php 
										wp_nav_menu(array(
											'theme_location'	=> 'primary_menu',
											'menu_class'		=> 'nav navbar-nav',
											'container'			=> '',
											'walker'			=> new The_Boss_Bootstrap_Navwalker(),
										));
									?>
								<?php endif; ?>
							</div><!-- /.navbar-collapse -->
						</nav>
						</div>
						<div class="mainmenu-right">
							<?php if($tb_menu_search_icon == 1) : ?>
								<div class="search-box">
									<i class="fa fa-search first_click" aria-hidden="true"></i>
									<i class="fa fa-times second_click" aria-hidden="true"></i>
								</div>
							<?php endif; ?>
							<?php if($tb_menu_mini_cart == 1 && function_exists('is_woocommerce')) : ?>
								<div class="chart-icon">
									<?php the_boss_woocommerce_mini_cart(); ?>
								</div>
							<?php endif; ?>									
						</div>
						<div class="search-box-text">
							<form action="<?php echo esc_url( home_url() ); ?>">
								<input type="text" name="s" id="all-search" placeholder="Search Here"/>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="sticky-anchor"></div>
		</header>