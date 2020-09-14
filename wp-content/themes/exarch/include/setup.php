<?php

/*
 * Enable support for Post Thumbnails on posts and pages.
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
function add_post_thumbnails_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');

/**
 * Include any styles into the site the proper way
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
function include_css_files() {
    // Example of including an external link
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');

    // Example of including a style local to your theme root
    wp_enqueue_style('exarch-css', get_template_directory_uri() . '/css/style.css');
}

// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_css_files');

/**
 * Include any scripts into the site the proper way
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
function include_js_files() {
    wp_enqueue_script('exarch-js', get_template_directory_uri() . '/script/site.js', [], false,true);
}// js at footer

// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_js_files');

/**
 * Register custom sidebar for theme
 * 
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 * 
 * @return void
 * 
 */
function register_theme_sidebar(){
    register_sidebar([
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'description' => 'This is the custom sidebar for my theme'
    ]);
}

add_action('widgets_init', 'register_theme_sidebar');

/**
 * Register menus
 * 
 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
 * 
 * @return void
 * 
 */

function register_theme_navigation(){
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');


