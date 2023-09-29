<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_action( 'header_parts', 'burrito_header_modal', 10 );
function burrito_header_modal() {
	get_template_part( 'template-parts/header/modal-login' );
}
add_action( 'header_parts', 'burrito_container_start', 15 );
function burrito_container_start() {
	?>
	<div class="header-wrap header container">
<?php
}

//*add_action( 'header_parts', 'burrito_header_icon_login', 20 );
//function burrito_header_icon_login() {
//	get_template_part( 'template-parts/header/login-icon' );
//}

add_action( 'header_parts', 'burrito_header_logo', 30 );
function burrito_header_logo() {
	get_template_part( 'template-parts/header/logo' );
}

//add_action( 'header_parts', 'burrito_header_search', 40 );
//function burrito_header_search() {
//	get_template_part( 'template-parts/header/search' );
//}

add_action( 'header_parts', 'burrito_header_card', 50 );
function burrito_header_card() {
	get_template_part( 'template-parts/header/mini-card' );
}
add_action( 'header_parts', 'burrito_container_end', 55 );
function burrito_container_end() {
	?>
	
	<?php
}
add_action( 'header_parts', 'burrito_header_navi', 60 );
function burrito_header_navi() {
	get_template_part( 'template-parts/header/navi' );
}?>
</div>