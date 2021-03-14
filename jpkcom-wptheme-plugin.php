<?php
/*
Plugin Name:	JPKCom WordPress Theme Plugin
Plugin URI:		https://example.com
Description:	A plugin to load custom assets, functions and templates into WordPress.
Version:		1.0.0
Author:			Jean Pierre Kolb
Author URI:		https://www.jpkc.com/
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'JPKCOM_WPTHEME_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'JPKCOM_WPTHEME_PLUGIN_URL', plugin_dir_url( __FILE__ ) );


/**
 * Enqueue scripts and styles in head and footer.
 */
if ( ! function_exists( 'jpkcom_enqueue_files' ) ) {

	/**
	 * Load JavaScript and CSS files.
	 */
	function jpkcom_enqueue_files() {

		// Loads a CSS file in the head.
		// wp_enqueue_style( 'jpkcom-wptheme-style', JPKCOM_WPTHEME_PLUGIN_URL . 'assets/css/style.css', array(), '1.0.0', 'all' );

		// Loads JS files in the footer.
		// wp_enqueue_script( 'jpkcom-wptheme-script', JPKCOM_WPTHEME_PLUGIN_URL . 'assets/js/script.js', array(), '1.0.0', true );

	}

}
add_action( 'wp_enqueue_scripts', 'jpkcom_enqueue_files' );


/**
 * Enqueue block editor assets.
 */
if ( ! function_exists( 'jpkcom_enqueue_gutenberg_files' ) ) {

	/**
	 * Load JavaScript and CSS files.
	 */
	function jpkcom_enqueue_gutenberg_files() {

		// Loads a CSS file.
		// wp_enqueue_style( 'jpkcom-gutenberg-css', JPKCOM_WPTHEME_PLUGIN_URL . 'assets/css/gutenberg.css', false );

		// Loads JS files.
		// wp_enqueue_script( 'jpkcom-gutenberg-js', JPKCOM_WPTHEME_PLUGIN_URL . 'assets/js/gutenberg.js', false );

	}

}
add_action( 'enqueue_block_editor_assets', 'jpkcom_enqueue_gutenberg_files' );


/**
 * Include PHP files.
 */
// require_once( JPKCOM_WPTHEME_PLUGIN_PATH . 'inc/my-function.php' );

