<?php 
if ( ! defined( 'ABSPATH')) {
    exit; //защита файла что к нему могут обратиться
}

add_action( 'widgets_init', 'burrito_widgets_init' );

function burrito_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'burrito' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'burrito' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
