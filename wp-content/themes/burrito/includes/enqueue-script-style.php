<?php 
if ( ! defined( 'ABSPATH')) {
    exit; //защита файла что к нему могут обратиться
}
add_action( 'wp_enqueue_scripts', 'burrito_scripts' );
function burrito_scripts() {
	wp_enqueue_style( 'burrito-style', get_stylesheet_uri());
	
}
add_action( 'wp_enqueue_scripts', 'burrito_styles' );
function burrito_styles() {
    wp_enqueue_script( 'burrito-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'burrito -skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
