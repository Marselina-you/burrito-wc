<?php


add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	load_template( get_template_directory() . '/includes/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'burrito_register_custom_fields' );
function burrito_register_custom_fields() {
	require get_template_directory() . '/includes/custom-fields-options/metabox.php';
	require get_template_directory() . '/includes/custom-fields-options/theme-optons.php';
}

require get_template_directory() . '/includes/theme-settings.php';
require get_template_directory() . '/includes/widget-areas.php';
require get_template_directory() . '/includes/enqueue-script-style.php';

require get_template_directory() . '/includes/custom-header.php';
require get_template_directory() . '/includes/custom-footer.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';
require get_template_directory() . '/includes/ajax.php';
require get_template_directory() . '/includes/navigations.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
	//require get_template_directory() . '/woocommerce/includes/wc-functions-cart.php';
	
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	//require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
	
}

