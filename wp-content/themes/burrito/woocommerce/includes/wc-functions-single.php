<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_action( 'woocommerce_before_single_product', 'burrito_wrapper_product_start', 5 );
function burrito_wrapper_product_start() {
	?>
	<div class="single-section"><!--добавила свой класс menu__content-->
		<div class="container">
		<section class="menu">
  <div class="container menu__container">
		
	<?php
}
add_action( 'woocommerce_after_single_product', 'burrito_wrapper_product_end', 5 );
function burrito_wrapper_product_end() {
	?>
		</div></div>
	</div>
	<?php
}
add_action( 'woocommerce_before_single_product_summary', 'burrito_wrapper_product_image_start', 5 );
function burrito_wrapper_product_image_start() {
	?>
	<div class="menu__content">
	<div class="menu-content-image">
	<?php
}
add_action( 'woocommerce_before_single_product_summary', 'burrito_wrapper_product_image_end', 25 );
function burrito_wrapper_product_image_end() {
	?>
	</div>
	<?php
}
add_action( 'woocommerce_before_single_product_summary', 'burrito_wrapper_product_entry_start', 30 );
function burrito_wrapper_product_entry_start() {
	?>
	<div class="menu-content-text">
	<?php
}
add_action( 'woocommerce_after_single_product_summary', 'burrito_wrapper_product_entry_end', 5 );
function burrito_wrapper_product_entry_end() {
	?>
	</div>
	
	<?php
}
function burrito_woocommerce_scripts() {
	wp_enqueue_style( 'burrito-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'burrito-woocommerce-style', $inline_font );
}
