
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package burore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
</head>
<style>
	body {
		
		background-color: grey;
	}
	header {
		display: flex; 
		flex-direction: column;
	}
	.page_item {

margin-right: 40px;
	}

	.page_item a {
		font: var(--regular-lato);
text-transform: capitalize;
//font-size: 20px;
color: var(--light-color);
transition: color 0.3s ease-in-out;

	}
	.modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    -webkit-overflow-scrolling: touch;
    outline: 0;
}
.search_form form{
	display: flex;
	
}
</style>
<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="header">
		<!-- header modal -->
		<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
			aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;</button>
						<h4 class="modal-title" id="myModalLabel">Не тормози, регайся!</h4>
					</div>
					<div class="modal-body modal-body-sub">
						<div class="row">
							<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
								<div class="sap_tabs">
									<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
										<ul>
											<li class="resp-tab-item" aria-controls="tab_item-0"><span>Авторизация</span></li>
											<li class="resp-tab-item" aria-controls="tab_item-1"><span>Регистрация</span></li>
										</ul>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
											<div class="facts">
												
												<div class="register">
													<?php get_template_part( '/woocommerce/includes/parts/wc-form', 'login');?>
												</div>
											</div>
										</div>
										<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="facts">
												<div class="register">
													<?php get_template_part( '/woocommerce/includes/parts/wc-form', 'register');?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="OR" class="hidden-xs">ИЛИ</div>
							</div>
							<div class="col-md-4 modal_body_right modal_body_right1">
								<div class="row text-center sign-with">
									<div class="col-md-12">
										<h3 class="other-nw">Воспользуйся соцсетями</h3>
									</div>
									<div class="col-md-12">
										<ul class="social">
											<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
											<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
											<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
											<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header__top">
			
			
				
			</div>
				
		
		

	
		<div class="header__container" id="home1">
		<div class="header-logo">
					<?php $logo_id = carbon_get_theme_option('bur_header_logo');
					$logo = $logo_id ? wp_get_attachment_image_src($logo_id , 'full') : '';
					$site_name = carbon_get_theme_option('bur_header_site_name') ? carbon_get_theme_option('bur_header_site_name') : get_bloginfo('name');
					$site_decs = carbon_get_theme_option('bur_header_site_desc') ? carbon_get_theme_option('bur_header_site_desc') : get_bloginfo('description');
					?>
					
					
					<?php if (is_front_page() && is_home()) :
						if ($logo_id) :	?>
						
							<a href="<?php echo home_url('/');?>"> <img src="<?php echo $logo[0];?>" width="<?php echo $logo[1];?>" height="<?php echo $logo[2];?>" alt="">
							</a>
						
							<?php else: ?>
							
								<a href="<?php echo home_url('/');?>">
									<?php echo $site_name; ?><span><?php echo $site_decs; ?></span>
								</a>
							
						<?php endif;?>
					<?php else:
						if ($logo_id) :	?>
						
							<img src="<?php echo $logo[0];?>" width="<?php echo $logo[1];?>" height="<?php echo $logo[2];?>" alt="">
							
						
					<?php else: ?>
						
					
								<?php echo $site_name; ?><span><?php echo $site_decs; ?></span>

						
					<?php endif;?>
					<?php endif;?>
				</div>
		<div class="nav-wrap">
		<nav id="site-navigation" class="nav header__nav">
			
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'list-reset nav__list',
        'container' => 'ul',
				) );
			?>
			<div class="page_item">
					<a href="#" data-toggle="modal" data-target="#myModal88"><span class="" aria-hidden="true">LogIn</span></a>
				</div>
					
				<div class="page_item search">
					
					<input class="search_box" type="checkbox" id="search_box">
					<label class="icon-search" for="search_box"><span class="" aria-hidden="true">Search</span></label>
					<div class="search_form">
						<form method="POST" action="<?php esc_url( home_url( '/' ) );?>">
							<input type="text" value="<?php get_search_query();?>" name="s" placeholder="Искать...">
							<input type="submit" value="Поиск">
						</form>
						<div class="search-result"></div>
					</div>
				</div>
				<div class="page_item cart cart box_1">
					<?php burrito_woocommerce_cart_link();?>
				</div>
		</nav>
		
		</div>
		<!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">