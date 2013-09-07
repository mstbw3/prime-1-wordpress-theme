<?php

init();

function register_styles () {
	wp_enqueue_style( "main-styles", get_template_directory_uri() . '/css/mq.css', 'false', 1 );
}

function init () {
	add_action('init', 'register_styles');
}


?>