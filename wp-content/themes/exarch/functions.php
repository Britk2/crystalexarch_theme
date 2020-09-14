<?php
/**
 * This file will be the main place to add custom php code into your theme
 *
 * @link - https://codex.wordpress.org/Functions_File_Explained
 * @return void
 */

/**
 * 
 * Theme Requirements
 * 
 */

 require get_template_directory().'/include/required.php';

/**
 * 
 * Set Up
 * 
 */

require get_template_directory().'/include/setup.php';


/**
 * 
 * Custom Post
 * 
 */

require get_template_directory().'/include/custom-post-types.php';


/**
 * 
 * Custom Taxonomy
 * 
 */

require get_template_directory().'/include/custom-taxonomies.php';


/**
 * 
 * ACF Setup
 * 
 */

require get_template_directory().'/include/acf.php';


