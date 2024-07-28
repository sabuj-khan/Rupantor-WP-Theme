<?php

/**
 * Sabuj Comet functions and definitions
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */


// All Required files 

if (file_exists(dirname(__FILE__) . '/gallery.php')) {
	require_once(dirname(__FILE__) . '/gallery.php');
}
if (file_exists(dirname(__FILE__) . '/custom-widgets/latest-posts.php')) {
	require_once(dirname(__FILE__) . '/custom-widgets/latest-posts.php');
}

if (file_exists(dirname(__FILE__) . '/custom-widgets/rupantor-tags.php')) {
	require_once(dirname(__FILE__) . '/custom-widgets/rupantor-tags.php');
}

if (file_exists(dirname(__FILE__) . '/custom-widgets/search.php')) {
	require_once(dirname(__FILE__) . '/custom-widgets/search.php');
}

if (file_exists(dirname(__FILE__) . '/meta/init.php')) {
	require_once(dirname(__FILE__) . '/meta/init.php');
}

if (file_exists(dirname(__FILE__) . '/meta/config.php')) {
	require_once(dirname(__FILE__) . '/meta/config.php');
}

if (file_exists(dirname(__FILE__) . '/shortcodes/shortcodes.php')) {
	require_once(dirname(__FILE__) . '/shortcodes/shortcodes.php');
}

if (file_exists(dirname(__FILE__) . '/plugins/added-plugin.php')) {
	require_once(dirname(__FILE__) . '/plugins/added-plugin.php');
}

if (file_exists(dirname(__FILE__) . '/plugins/add-pluginf.php')) {
	require_once(dirname(__FILE__) . '/plugins/add-pluginf.php');
}







// All theme supports

add_action('after_setup_theme', 'rupantor_supportive_functions');

function rupantor_supportive_functions()
{
	load_theme_textdomain('rupantor', get_template_directory() . '/languages');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');
	add_theme_support('post-formats', array(
		'gallery',
		'quote',
		'image',
		'video',
		'audio',
	));

	register_nav_menus(
		array(
			'main' => __('Main menu', 'rupantor'),
			'footer'  => __('Footer menu', 'rupantor'),
		)
	);
}


function get_rupantor_fonts()
{

	$rupantor = array();

	$rupantor[] = 'Montserrat:400,700';
	$rupantor[] = 'Raleway:300,400,500';
	$rupantor[] = 'Halant:300,400';

	$rupantor_fonts = add_query_arg(array(
		'family'	=> urlencode(implode('|', $rupantor)),
	), 'https://fonts.googleapis.com/css');


	return $rupantor_fonts;
}

// All files enqueueing 


add_action('wp_enqueue_scripts', 'rupantor_all_styles');

function rupantor_all_styles()
{
	wp_enqueue_style('bundle', get_template_directory_uri() . '/css/bundle.css', array(), '', false);
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '', false);
	wp_enqueue_style('fonts', get_rupantor_fonts());
	wp_enqueue_style('stylesheet', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'rupantor_all_scripts');

function rupantor_all_scripts()
{
	wp_enqueue_script('bundlejs', get_template_directory_uri() . '/js/bundle.js', array('jquery'), '', true);
	wp_enqueue_script('googleapis', 'https://maps.googleapis.com/maps/api/js?v=3.exp', array('jquery', 'bundlejs'), '', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery', 'bundlejs'), '', true);
}


add_action('wp_enqueue_scripts', 'conditional_scripts');

function conditional_scripts()
{
	wp_enqueue_script('html5shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_script_add_data('html5shim', 'conditional', 'lt IE 9');

	wp_enqueue_script('maxcdn', 'https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js');
	wp_script_add_data('maxcdn', 'conditional', 'lt IE 9');
}

add_action('admin_enqueue_scripts', 'metabox_style_encript');

function metabox_style_encript()
{
	wp_enqueue_script('scriptjs', get_template_directory_uri() . '/js/script.js');
}


// All Sidebar registration area

add_action('widgets_init', 'all_sidebar_areas');

function all_sidebar_areas()
{
	register_sidebar(array(
		'name'		=> __('Sidebar of the right side', 'rupantor'),
		'id'		=> 'right-sidebar',
		'desc'		=> __('You may put your widget on the right sidebar'),
		'before_widget'	=> '<div class="widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h6 class="upper">',
		'after_title'	=> '</h6>'
	));

	register_sidebar(array(
		'name'		=> __('Footer First Sidebar', 'rupantor'),
		'id'		=> 'footer-f-sidebar',
		'desc'		=> __('You may put your widget on the footer first sidebar'),
		'before_widget'	=> '<div class="col-sm-4"><div class="widget">',
		'after_widget'	=> '</div></div>',
		'before_title'	=> '<h6 class="upper">',
		'after_title'	=> '</h6>'
	));

	register_sidebar(array(
		'name'		=> __('Footer Second Sidebar', 'rupantor'),
		'id'		=> 'footer-s-sidebar',
		'desc'		=> __('You may put your widget on the footer second sidebar'),
		'before_widget'	=> '<div class="widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h6 class="upper">',
		'after_title'	=> '</h6>'
	));

	register_sidebar(array(
		'name'		=> __('Copyright Sidebar', 'rupantor'),
		'id'		=> 'copyright-sidebar',
		'desc'		=> __('You may put your widget on the footer Copyright Sidebar'),
		'before_widget'	=> '<div class="footer-social">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h6 class="upper">',
		'after_title'	=> '</h6>'
	));
}


// Post type creation areas


add_action('init', 'posttype_functionalities');

function posttype_functionalities()
{

	// Portfolio Post Type


	register_post_type('portfolios', array(
		'labels'	=> array(
			'name'			=> 'Portfolios',
			'singular_name' => 'Testimonial',
			'add_new_item'	=> 'Add New Portfolio',
			'add_new'		=> 'Add New Portfolio',
			'new_item'      => 'New Portfolio',
			'edit_item'		=> 'Edit Portfolio'
		),
		'public' => true,
		'hierarchical'        => true,
		'menu_position'       => 5,
		'supports'			  => array('title', 'editor', 'thumbnail'),
		'menu_icon'			  => 'dashicons-portfolio'
	));

	//Sliders Post Type

	register_post_type('sliders', array(
		'labels'	=> array(
			'name'			=> 'Sliders',
			'singular_name' => 'Slider',
			'add_new_item'	=> 'Add New Slider',
			'add_new'		=> 'Add New Slider',
			'new_item'      => 'New Slider',
			'edit_item'		=> 'Edit Slider'
		),
		'public' => true,
		'hierarchical'        => true,
		'menu_position'       => 15,
		'menu_icon'			  => 'dashicons-slides',
		'supports'			  => array('title', 'editor', 'thumbnail'),

	));

	// Clients Post Type

	register_post_type('clients', array(
		'labels'	=> array(
			'name'			=> 'Clients',
			'singular_name' => 'Client',
			'add_new_item'	=> 'Add New Client',
			'add_new'		=> 'Add New Client',
			'new_item'      => 'New Client',
			'edit_item'		=> 'Edit Client'
		),
		'public' => true,
		'hierarchical'        => true,
		'menu_position'       => 15,
		'menu_icon'			  => 'dashicons-admin-users',
		'supports'			  => array('title', 'thumbnail'),

	));

	// Testimonials Post Type

	register_post_type('testimonials', array(
		'labels'	=> array(
			'name'			=> 'Testimonials',
			'singular_name' => 'Testimonial',
			'add_new_item'	=> 'Add New Testimonial',
			'add_new'		=> 'Add New Testimonial',
			'new_item'      => 'New Testimonial',
			'edit_item'		=> 'Edit Testimonial'
		),
		'public' => true,
		'hierarchical'        => true,
		'menu_position'       => 25,
		'menu_icon'			  => 'dashicons-testimonial',
		'supports'			  => array('title', 'editor', 'thumbnail'),

	));


	// Texonomi Registration

	register_taxonomy('texonomy', 'portfolios', array(
		'labels'	=> array(
			'name'			=> 'Categories',
			'singular_name' => 'Category',
			'add_new_item'	=> 'Add New Category',
			'add_new'		=> 'Add New Category',
			'new_item'      => 'New Category',
			'edit_item'		=> 'Edit Category',
		),
		'hierarchical'		=> true,
	));
}







register_activation_hook('__FILE__', 'Flush_rewrite_function');

function Flush_rewrite_function()
{
	flush_rewrite_rules();
}
