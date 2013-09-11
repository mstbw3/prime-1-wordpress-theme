<?php

init();

function prime1_register_styles () {
	wp_enqueue_style( "main-styles", get_template_directory_uri() . '/css/mq.css', 'false', 1 );
}

function prime1_register_menus () {
	register_nav_menus( array(
		'main_menu' => 'Main navigation',
		'footer_menu' => 'Footer Navigation'
	) );
}

function prime1_init () {
	add_action('init', 'prime1_register_styles');
	add_action('init', 'prime1_register_menus');
}


?>