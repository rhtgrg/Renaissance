<?php
function fetch_styles()
{
	wp_register_style('general', get_template_directory_uri().'/css/style.css');
	wp_register_style('unsemantic', get_template_directory_uri().'/css/unsemantic-grid-responsive.css');
  wp_register_style('google', 'http://fonts.googleapis.com/css?family=Ubuntu+Condensed');
  
	wp_enqueue_style('unsemantic');
	wp_enqueue_style('google');
  wp_enqueue_style('general');
}

function child_theme_setup()
{
	register_sidebar(array(
		'name' => __( 'Horizontal Widget Area', 'renaissance' ),
		'id' => 'horizontal',
		'description' => __( 'An optional horizontal widget area', 'renaissance' ),
	));
}

add_action('wp_enqueue_scripts', 'fetch_styles');
add_action( 'after_setup_theme', 'child_theme_setup' );
?>