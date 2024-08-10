<?php
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function enqueue_scripts()
{
	wp_enqueue_style('main', get_stylesheet_uri());
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array('main'));

	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}
