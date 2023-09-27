
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

	<header id="masthead" class="header container">
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