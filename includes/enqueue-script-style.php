<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'wp_enqueue_scripts', 'rational_scripts' );
function rational_scripts() {
	wp_enqueue_style( 'rational-style', get_stylesheet_uri() );
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'globals-style', get_template_directory_uri() . '/assets/css/globals.css');
	wp_enqueue_style( 'brands', get_template_directory_uri() . '/assets/css/brands.css');
	wp_enqueue_style( 'breadcrumbs', get_template_directory_uri() . '/assets/css/breadcrumbs.css');
	wp_enqueue_style( 'categories-header', get_template_directory_uri() . '/assets/css/categories-header.css');
	wp_enqueue_style( 'clients', get_template_directory_uri() . '/assets/css/clients.css');
	wp_enqueue_style( 'contact-form', get_template_directory_uri() . '/assets/css/contact-form.css');
	wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css');
	wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css');
	wp_enqueue_style( 'hero', get_template_directory_uri() . '/assets/css/hero.css');
	wp_enqueue_style( 'home-categories', get_template_directory_uri() . '/assets/css/home-categories.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style( 'name-filter', get_template_directory_uri() . '/assets/css/name-filter.css');
	wp_enqueue_style( 'product-list-pagination', get_template_directory_uri() . '/assets/css/product-list-pagination.css');
	wp_enqueue_style( 'product-list', get_template_directory_uri() . '/assets/css/product-list.css');
	wp_enqueue_style( 'product', get_template_directory_uri() . '/assets/css/product.css');
	wp_enqueue_style( 'steps', get_template_directory_uri() . '/assets/css/steps.css');
	wp_enqueue_style( 'pagination', get_template_directory_uri() . '/assets/css/pagination.css');
	

}

add_action( 'wp_enqueue_scripts', 'rational_styles' );
function rational_styles() {
	
	wp_enqueue_script( 'rational-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'rational-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'rational-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/header.js', array(), null, true);

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), null, true);
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true);

	wp_enqueue_script( 'header', get_template_directory_uri() . '/assets/js/header.js', array('jquery'), null, true);
	wp_enqueue_script( 'brands', get_template_directory_uri() . '/assets/js/brands.js', array('jquery'), null, true);
	wp_enqueue_script( 'clients', get_template_directory_uri() . '/assets/js/clients.js', array('jquery'), null, true);

}
