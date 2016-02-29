<?php

if (function_exists('add_theme_support')){

add_theme_support('post_thumbnails');

add_image_size('events',600,9999, true );

add_image_size('logo' ,160,9999, true);

add_image_size('EventsPageThumb',460,9999,true);

add_image_size('fiveeighty', 580, 9999, true);

add_image_size('onefiveone', 151, 9999, true);

add_image_size('oneoheight', 108, 9999, true);

add_image_size('oneoheightst', 108, 72, true);

add_image_size('threethirty', 330, 9999, true);



}



if ( function_exists('register_sidebar') )

    register_sidebar();



// Changing excerpt length

function new_excerpt_length($length) {

	return 20;

}

add_filter('excerpt_length', 'new_excerpt_length', 999);



// Changing excerpt more

function new_excerpt_more($more) {

       global $post;

	return ' [...] <a href="'. get_permalink($post->ID) . '">read more <span>&raquo;</span></a>';

}

add_filter('excerpt_more', 'new_excerpt_more');



/* Custom CSS styles on WYSIWYG Editor � Start

======================================= */

if ( ! function_exists('tdav_css') ) {

	function tdav_css($wp) {

		$wp .= ',' . get_bloginfo('stylesheet_directory') . '/css/wp-custom-styles.css';

		return $wp;

	}

}

add_filter( 'mce_css', 'tdav_css' );





/*  Advanced Custom Fields

======================================= */



add_action('acf/register_fields', 'my_register_fields');



function my_register_fields() {

  include_once('fields/events-page.php');

}

register_sidebar(array('name'=>'Home Right Column',));

register_sidebar(array('name'=>'Home Left Column',));

register_sidebar(array('name'=>'Home Gallery',));



function events_scripts_styles() {


  // Loads JavaScript file with functionality specific to Events North West.


  wp_enqueue_script( 'events-script-modern', get_template_directory_uri() . '/js/libs/modernizr-2.0.6.min.js', array( 'jquery' ), '2014-06-15', false );

}

add_action( 'wp_enqueue_scripts', 'events_scripts_styles' );


/**
 * HTML5 Shiv
 * Enables use of HTML5 sectioning elements in legacy Internet
 * Explorer and provides basic HTML5 styling for Internet Explorer 6-9
 */
 
// add ie conditional html5 shim to header
function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="'. get_stylesheet_directory_uri() .'/js/html5shiv-printshiv.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');
 
/**
 * Respond
 * A fast & lightweight polyfill for min/max-width CSS3 Media Queries
 * (for IE 6-8, and more).
 */
 
// add ie conditional respond to header
function add_ie_respond () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="'. get_stylesheet_directory_uri() .'/js/respond.min.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_respond');

?>