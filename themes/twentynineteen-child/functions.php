<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package twentynineteen

 */


function twentyninteenchild_enqueue_styles() {
    //define parent style handle
    $parent_style = 'twentynineteen-style'; // This is 'twentyninteen-style' for the twentyninteen theme.

    //Enqueue parent style
    wp_enqueue_style(
        $parent_style, 
        get_template_directory_uri() . '/style.css' 
    );
    
    //Enqueue child style
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'twentyninteenchild_enqueue_styles' );