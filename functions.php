<?php
 
function linnflux_child_theme_styles() {
	// bootstrap css
	//wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

	// materializeCSS
	//wp_enqueue_style( 'materialize-css', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css' );

	//parent css
    wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'linnflux_child_theme_styles', 11 );


function lfx_scripts() {
	// custom js
    wp_register_script('lfx-script', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'),'1.7', true);
    wp_enqueue_script('lfx-script');

	// bootstrap js
	//wp_register_script('bootstrap-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'),'1.7', true);
	//wp_enqueue_script('bootstrap-script');

    // materialize js
	//wp_register_script('materialize-script', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js', array('jquery'),'1.7', true);
	//wp_enqueue_script('materialize-script');

	
}
add_action( 'wp_enqueue_scripts', 'lfx_scripts' );
