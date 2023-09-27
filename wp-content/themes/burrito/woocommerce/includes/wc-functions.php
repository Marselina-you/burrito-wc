<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'woocommerce_before_main_content', 'burrito_add_breadcrumbs', 20 );
function burrito_add_breadcrumbs(){
	?>
	<div class="breadcrumb_dress">
		<div class="container">
			<?php woocommerce_breadcrumb(); ?>
		</div>
	</div>
<?php
}

add_action( 'woocommerce_before_single_product', 'burrito_wrapper_product_start', 5 );
function burrito_wrapper_product_start() {
	?>
	<div class="single-section"><!--добавила свой класс menu__content-->
		<div class="container">
	<?php
}
add_action( 'woocommerce_after_single_product', 'burrito_wrapper_product_end', 5 );
function burrito_wrapper_product_end() {
	?>
		</div>
	</div>
	<?php
}
add_action( 'woocommerce_before_single_product_summary', 'burrito_wrapper_product_image_start', 5 );
function burrito_wrapper_product_image_start() {
	?>
	<div class="menu-content-image col-md-4 single-left">
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
	<div class="menu-content-text col-md-8 single-right">
	<?php
}
add_action( 'woocommerce_after_single_product_summary', 'burrito_wrapper_product_entry_end', 5 );
function burrito_wrapper_product_entry_end() {
	?>
	</div>
	<div class="clearfix"> </div>
	<?php
}