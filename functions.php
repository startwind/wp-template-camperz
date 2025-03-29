<?php

function mein_custom_styles() {
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'mein_custom_styles' );

function acf_affiliate_shortcode() {
	$affiliate = get_field( 'affiliate' );

	if ( $affiliate ) {
		return $affiliate;
	} else {
		return "";
	}
}

add_shortcode( 'affiliate_link', 'acf_affiliate_shortcode' );
