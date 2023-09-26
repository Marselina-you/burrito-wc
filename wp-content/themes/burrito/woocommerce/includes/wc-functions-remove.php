<?php
/**
 * файл для отрубания настроек woocommerce
 */
if ( ! defined( 'ABSPATH')) {
    exit; //защита файла что к нему могут обратиться
}

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
/**add_filter( 'woocommerce_enqueue_styles', 'burrito_dequeue_styles', 1 );
function burrito_dequeue_styles( $enqueue_styles ) {
	
	
	//unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );
	unset( $enqueue_styles['woocommerce-smallscreen'] );
	//$enqueue_styles['woocommerce-general']['deps'] = array('bootsrap-style');
	//get_vd($enqueue_styles);
	return $enqueue_styles;
} */
