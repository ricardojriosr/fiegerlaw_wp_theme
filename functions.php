<?php

// Add Featured Images for Custom Posts

add_theme_support('post-thumbnails');

// Add Custom Logo to the Theme

add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

/* =================================================================================================================== */

// Add Custom Post for Attorneys

function fiegerlaw_custom_post_attorney() {
    $labels = array(
      'name'               => _x( 'Attorneys', 'post type general name' ),
      'singular_name'      => _x( 'Attorney', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'book' ),
      'add_new_item'       => __( 'Add New Attorney' ),
      'edit_item'          => __( 'Edit Attorney' ),
      'new_item'           => __( 'New Attorney' ),
      'all_items'          => __( 'All Attorneys' ),
      'view_item'          => __( 'View Attorney' ),
      'search_items'       => __( 'Search Attorneys' ),
      'not_found'          => __( 'No Attorney found' ),
      'not_found_in_trash' => __( 'No Attorney found in the Trash' ),       
      'menu_name'          => 'Attorneys'
    );
    $args = array(
      'labels'        => $labels,
      'description'   => 'Holds our products and product specific data',
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'has_archive'   => true,
    );
    register_post_type( 'attorney', $args ); 
}
add_action( 'init', 'fiegerlaw_custom_post_attorney' ); // Init Hook for Custom Post

/* =================================================================================================================== */

// Add CSS and JS Scripts

function fiegerlaw_scripts() {

    // CSS
    wp_enqueue_style( 'fiegerlaw-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'font-awesome', "http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" );
    wp_enqueue_style( 'google-fonts', "https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap");
    //SlickNav CSS
    wp_enqueue_style('slicknavCSS', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css', array(), '1.0.0');
    //JAVASCRIPT - Slick Nav JS
    wp_enqueue_script('slicknavJS', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'fiegerlaw_scripts' ); // Load Scripts CSS and JS Hook

/* =================================================================================================================== */

// Add Menu Functions

function fiegerlaw_menus() {
    register_nav_menus(array(
      'menu-1' => __( 'Main Menu', 'fiegerlaw' )
    ));
    register_nav_menu('footer-menu',__( 'Footer menu' ));
}

add_action('init', 'fiegerlaw_menus'); // Add Menu Functions Hook

/* =================================================================================================================== */


?>