<?php
function talk_enqueue_scipts() {
	wp_enqueue_style( 'custom-style', get_template_directory_uri() .  '/assets/css/main.css',  array(), false, 'all' );
}

add_action( 'wp_enqueue_scripts', 'talk_enqueue_scipts' );
