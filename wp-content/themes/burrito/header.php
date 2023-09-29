
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
	.mini-card-content {
		position: absolute;
		display: none;
	}
	.site-header-cart:hover .mini-card-content {
  display: block;
}
	.widget_shopping_cart {
		display: none;
		width: 100px;
		height: 100px;
		background-color: red;
	}
	.modal-login-overlay--visible {
    
    z-index: 10000;
}

.resp-tab-content {
	display: none;
	
}
.modal-content {
    
    height: 400px;
}

.resp-accordion {
	opacity: 0;
	font-family: var(--regular-lato);
  color: var(--dark-color);
  font-weight: 700;
}
.resp-tab-active {
	opacity: 1;
	
}
.quantity {
	display: flex;
	opacity: .9;
}
.quantity input {
	
    text-align: center;
}
.quantity .plus{
	background-color: var(--order-color);
    
}
.quantity .minus{
	background-color: var(--order-color);
    
}
.plus, .minus {

	border: none;
    border-radius: 8px;
    padding: 7px 6px;
    background-color: var(--order-color);
    transition: background-color 0.3s ease-in-out;
 
  
  


 
}

	</style>
	
<body <?php body_class(); ?> id="page">
<div id="page" class="site">

	<header id="masthead" class="container">
		

		
		<?php do_action('header_parts'); 
		/**
		 * header_parts hook.
		 *
		 * @hooked estore_header_modal - 10
		 * @hooked estore_container_start - 15
		 * @hooked estore_header_icon_login - 20
		 * @hooked estore_header_logo - 30
		 * @hooked estore_header_search - 40
		 * @hooked estore_header_card - 50
		 * @hooked estore_container_end - 55
		 * @hooked estore_header_navi - 60
		 *
		 */
		?>
		
</header>
<div id="content" class="site-content">