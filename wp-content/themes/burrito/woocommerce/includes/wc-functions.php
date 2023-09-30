<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_action( 'woocommerce_before_main_content', 'burrito_add_sidebar_only_archive', 50 );
function burrito_add_sidebar_only_archive() {
	if ( ! is_product() ) {
		woocommerce_get_sidebar();
	}
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


add_action( 'wp_enqueue_scripts', 'burrito_woocommerce_scripts' );
add_filter('woocommerce_short_description', 'burrito_short_description', 10);
function burrito_short_description($content){
	?>
		<div class="description">
			<?php echo $content;?>
		</div>
	<?php
	}