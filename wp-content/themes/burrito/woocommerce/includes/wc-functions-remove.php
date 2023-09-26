<?php
/**
 * файл для отрубания настроек woocommerce
 */
if ( ! defined( 'ABSPATH')) {
    exit; //защита файла что к нему могут обратиться
}

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );//этоти фильтр отключает вооюще все скрипты
