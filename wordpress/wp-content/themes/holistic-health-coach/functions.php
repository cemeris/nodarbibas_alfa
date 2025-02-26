<?php
/**
 * Holistic Health Coach functions
 */

//Admin css
add_editor_style( array( 'assets/css/admin.css' ) );

if ( ! function_exists( 'holistic_health_coach_setup' ) ) :
function holistic_health_coach_setup() {

    load_theme_textdomain( 'holistic-health-coach', get_template_directory() . '/languages' );	
}
endif; 
add_action( 'after_setup_theme', 'holistic_health_coach_setup' );

if ( ! function_exists( 'holistic_health_coach_styles' ) ) :
	function holistic_health_coach_styles() {
		// Register theme stylesheet.
		wp_register_style('holistic-health-coach-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);
		// Register theme custom code js.
		wp_enqueue_script( 'customcode', 
			get_template_directory_uri() . '/assets/js/customcode.js', array( 'jquery' ) );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'holistic-health-coach-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'holistic_health_coach_styles' );
