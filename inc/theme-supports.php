<?php

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on neuron, use a find and replace
     * to change 'neuron' to the name of your theme in all the template files.
    */
function neuron_theme_supports(){
    
    //Loading theme textdomain
    load_theme_textdomain( 'neuron', get_template_directory() . '/languages' );
    
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
        
    //Adding support for automatic title        
    add_theme_support( 'title-tag' );
    
    //Enable post thumbnail support
    add_theme_support('post-thumbnails');
    
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'header_menu' => esc_html__( 'Main Menu', 'neuron' ),
	) );
    
    /*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		) );
    
    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    
    /**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
    
    //Add slider image size
add_image_size('slider-bg', 1400,730,true);

    
    
}
add_action('after_setup_theme', 'neuron_theme_supports');