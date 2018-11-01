<?php

/* Removing bar bump */
function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }
add_action('get_header', 'my_filter_head');

/* Adding the javascripts */
function wpt_register_js() {

    wp_deregister_script('jquery');
    wp_register_script('jquery', "https://code.jquery.com/jquery-1.11.1.min.js", false, null);
    wp_enqueue_script('jquery');

    wp_register_script('touchswipe', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js', 'touchswipe');
    wp_enqueue_script('touchswipe');

    wp_register_script('bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', 'bootstrap');
    wp_enqueue_script('bootstrap.min');

    wp_register_script('sidebar-top', get_template_directory_uri() . '/js/sidebar-top.js', 'sidebar-top');
    wp_enqueue_script('sidebar-top');

    if (is_page( 'Home' )) {
        wp_register_script('homepage', get_template_directory_uri() . '/js/homepage.js', 'homepage');
        wp_enqueue_script('homepage');
    }

}
add_action( 'wp_enqueue_scripts', 'wpt_register_js' );

/* Adding the css */
function wpt_register_css() {

    wp_register_style( 'font-awesome.css', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
    wp_enqueue_style( 'font-awesome.css' );

    wp_register_style( 'bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );

    wp_register_style( 'bootstrap-theme.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' );
    wp_enqueue_style( 'bootstrap-theme.min' );

    wp_register_style( 'style.css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'style.css' );

    wp_register_style( 'sidebar-top.css', get_template_directory_uri() . '/css/sidebar-top.css' );
    wp_enqueue_style( 'sidebar-top.css' );

    wp_register_style( 'homepage.css', get_template_directory_uri() . '/css/homepage.css' );
    wp_enqueue_style( 'homepage.css' );

    wp_register_style( 'footer.css', get_template_directory_uri() . '/css/footer.css' );
    wp_enqueue_style( 'footer.css' );

    if (!is_page( 'home' )) {
        wp_register_style( 'pages.css', get_template_directory_uri() . '/css/pages.css' );
        wp_enqueue_style( 'pages.css' );
    }

}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

// Custom Scripting to Move JavaScript from the Head to the Footer

function remove_head_scripts() { 

    remove_action('wp_head', 'wp_print_scripts'); 
    remove_action('wp_head', 'wp_print_head_scripts', 9); 
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
 
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5); 

} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

/* Adding the menus */
function register_my_menus() {
    
    if (function_exists('register_nav_menu')) {

        register_nav_menu('header_menu', 'Header Menu');
    
    }

}
add_action( 'init', 'register_my_menus' );
