<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'bur_footer_parts', 'burrito_footer_start', 15 );
function burrito_footer_start() {
	?>
	<footer class="footer">
	<a href="#page" data-scroll class="to-top">
    <span class="to-top__icon">
	<svg>
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#to-top"></use></svg>
    </span>
  </a>
		<div class="container">
			<div class="footer__content">

			
	<?php
}
add_action( 'bur_footer_parts', 'burrito_widgets_callback', 20 );
function burrito_widgets_callback() {
	get_template_part( 'template-parts/footer/widgets' );
}
add_action( 'bur_footer_parts', 'burrito_copyright_callback', 30 );
function burrito_copyright_callback() {
	get_template_part( 'template-parts/footer/copyright' );
}
add_action( 'bur_footer_parts', 'burrito_footer_end', 40 );
function burrito_footer_end() {
	?>
	</div>
		</div>
	</footer>
	<div class="overlay"></div>
	<?php
}