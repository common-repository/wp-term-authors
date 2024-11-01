<?php

/**
 * Plugin Name: WP Term Authors
 * Plugin URI:  https://wordpress.org/plugins/wp-term-authors/
 * Description: Authors for categories, tags, and other taxonomy terms
 * Author:      John James Jacoby
 * Version:     0.2.0
 * Author URI:  https://profiles.wordpress.org/johnjamesjacoby/
 * License:     GPL v2 or later
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Instantiate the main WordPress Term Color class
 *
 * @since 0.1.2
 */
function _wp_term_authors() {

	// Setup the main file
	$file = __FILE__;

	// Include the main class
	include dirname( $file ) . '/includes/class-wp-term-meta-ui.php';
	include dirname( $file ) . '/includes/class-wp-term-authors.php';

	// Instantiate the main class
	new WP_Term_Authors( $file );
}
add_action( 'init', '_wp_term_authors', 88 );
