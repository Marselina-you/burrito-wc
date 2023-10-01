<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'woocommerce_before_main_content', 'burrito_archive_wrapper_start', 40 );
function burrito_archive_wrapper_start(){
?>
	
		
			
<?php
}
add_action( 'woocommerce_after_main_content', 'burrito_archive_wrapper_end', 30 );
function burrito_archive_wrapper_end(){
?>
				
			
	
	<?php
}

add_action( 'woocommerce_before_main_content', 'burrito_archive_content_wrapper_start', 60 );
function burrito_archive_content_wrapper_start(){
	?>
	<section class="menu">
  <div class="container menu__container">
	<?php
}
add_action( 'woocommerce_after_main_content', 'burrito_archive_content_wrapper_end', 25 );
function burrito_archive_content_wrapper_end(){
	?>
	</div></div>
	<?php
}
remove_filter( 'woocommerce_product_loop_start', 'woocommerce_maybe_show_product_subcategories');
add_action( 'woocommerce_before_shop_loop', 'burrito_out_subcategories', 40 );
function burrito_out_subcategories() {
	$cat_out = woocommerce_output_product_categories( array(
		'before'    => '<ul class="header-menu-nav__list list-reset">',
		'after'     => '</ul>',
		'parent_id' => is_product_category() ? get_queried_object_id() : 0,
	) );
	return $cat_out;
}

add_filter( 'product_cat_class', 'burrito_add_classes_product_cat' );
function burrito_add_classes_product_cat($classes){
	$classes[] = 'header-menu-nav__item';
return $classes;
}
add_filter( 'woocommerce_show_page_title', 'burrito_hide_title_shop' );
function burrito_hide_title_shop( $hide ) {
	if ( is_shop() ) {
		$hide = false;
	}
	
	return $hide;
}
add_filter( 'post_class', 'burrito_add_class_loop_item' );
function burrito_add_class_loop_item($clasess){
	if(is_shop() || is_product_taxonomy()){
		$clasess[] = 'menu__content';
	}
	//get_pr($clasess, false);
	return $clasess;
}
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

add_action( 'woocommerce_before_shop_loop_item', 'burrito_loop_product_div_open' , 5);
function burrito_loop_product_div_open(){
	?>
	
	<?php
}

add_action( 'woocommerce_after_shop_loop_item', 'burrito_loop_product_div_close' , 20);
function burrito_loop_product_div_close(){
	?>
	
	<?php
}
add_action( 'woocommerce_before_shop_loop_item_title', 'burrito_loop_product_div_image_open', 5 );
function burrito_loop_product_div_image_open(){
	?>
	
	<div class="menu-content-image">
	<?php
}
add_action( 'woocommerce_before_shop_loop_item_title', 'burrito_loop_product_div_image_close', 30);
function burrito_loop_product_div_image_close(){
	?>
	
	</div>
	<?php
}
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title',10 );
add_action( 'woocommerce_shop_loop_item_title', 'burrito_template_loop_product_title' , 10);
function burrito_template_loop_product_title(){
	echo '
	<div class="menu-content-text">
	<h5 class="menu-content-text__title"><a href="'. get_permalink() .'">' . get_the_title() . '</a>&nbsp;';
}

add_action( 'woocommerce_after_shop_loop_item_title', 'burrito_loop_product_div_price_open', 7 );
function burrito_loop_product_div_price_open(){
	?></h5>
	<div class="block-price-cart"></div>
	<?php
}
add_action( 'woocommerce_after_shop_loop_item', 'burrito_loop_product_div_price_close', 15 );
function burrito_loop_product_div_price_close(){
	?>
	</div>
	<?php
}

add_filter( 'woocommerce_loop_add_to_cart_args', 'burrito_add_class_add__to_cart' );
function burrito_add_class_add__to_cart($args){
	
	$args['class'] =  $args['class'] . 'btn-reset btn btn--order';

	return $args;
}