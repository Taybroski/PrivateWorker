<?php 
	function themeslug_enqueue_style() {
		wp_enqueue_style( 'style', get_stylesheet_uri(), false, time() );
		wp_enqueue_style( 'landing', get_template_directory_uri() . '/landing.css', false, time() ); 
		wp_enqueue_style( 'listings', get_template_directory_uri() . '/listings.css', false, time() ); 
	}

	function themeslug_enqueue_script() {
		
	}

	add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
	add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

	// Print out arrays and objects
	function prePrint($data) {
		echo "<pre>" . print_r($data, 1) . "</pre>";
	}
	
?>