<?php

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function register_menu() {
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'cbr-theme' ),
  ) );
}
add_action('after_setup_theme', 'register_menu');

add_theme_support( 'post-thumbnails' );