<?php
function load_css()
{
	wp_register_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('main', get_template_directory_uri(). '/css/main.css', array(), false, 'all');
	wp_enqueue_style('main');

}

add_action('wp_enqueue_scripts', 'load_css');

function load_stylesheet()
{
	wp_register_style('font', get_template_directory_uri(). '/css/font-awesome.min.css', array(), 1, 'all');
	wp_enqueue_style('font');

	wp_register_style('style', get_template_directory_uri(). '/css/style.css', array(), 1, 'all');
	wp_enqueue_style('style');

	wp_register_style('slick', get_template_directory_uri(). '/css/slick.css', array(), 1, 'all');
	wp_enqueue_style('slick');

	wp_register_style('slick-theme', get_template_directory_uri(). '/css/slick-theme.css', array(), 1, 'all');
	wp_enqueue_style('slick-theme');

}

add_action('wp_enqueue_scripts', 'load_stylesheet');


function load_js()
{
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', 'jquery', false,true);
	wp_enqueue_script('bootstrap');

}
add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');
/*function register_my_menu() {
   register_nav_menu('header-menu',__( 'Menu' ));
}
add_action( 'init', 'register_my_menu' );*/


register_nav_menus(
array(
	'top-menu'=> 'top menu location',
	'mobile-menu' => 'mobile menu location'
)
);



?>