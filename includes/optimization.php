<?php


function webwp__removed_unused() {
	wp_deregister_script( 'heartbeat' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'webwp__removed_unused' );


function webwp__remove_protocol( $url ) {
	return str_replace( array( 'https:', 'http:' ), '', $url );
}
add_filter( 'script_loader_src', 'webwp__remove_protocol' );
add_filter( 'style_loader_src', 'webwp__remove_protocol' );
