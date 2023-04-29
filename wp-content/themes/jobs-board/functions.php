<?php

/**
 * Function take care of handling assets with enqueue
 * @return void
 */
function job_assets() {
	wp_enqueue_style(
		'jobs-board',
		get_stylesheet_directory_uri() . '/assets/css/master.css', array(),
		filemtime( get_template_directory() . '/assets/css/master.css' ) );
}

add_action( 'wp_enqueue_scripts', 'job_assets' );
