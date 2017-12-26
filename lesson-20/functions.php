<?php

/**
 * Enqueue Scripts
 */
function talk_enqueue_scripts() {
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/main.css',  array(), false, 'all' );
  wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/main.js',  array(), false, true );
}

add_action( 'wp_enqueue_scripts', 'talk_enqueue_scripts' );

/**
 * Excerpt Length
 */

function talk_excerpt_length() {
    return 65;
}

add_filter( 'excerpt_length', 'talk_excerpt_length', 999 );

/**
 * Theme Setup
 */

function talk_theme_setup(){
	add_theme_support('post-thumbnails');
	add_theme_support( 'post-formats', array( 'aside', 'link' ) );

	register_nav_menus( array(
	'primary' => 'Main Menu',
	'footer_menu' => 'Footer Menu'
) );
}

add_action( 'after_setup_theme', 'talk_theme_setup' );

add_action( 'widgets_init', 'talk_widgets_init' );
function talk_widgets_init() {


    register_sidebar( array(
        'name' => 'Main Sidebar',
        'id' => 'sidebar-1'

    ) );

}
