<?php
/**
 * Plugin Name: Our Testimonial
 * Plugin URI:
 * Description: testimonal-block — is a Gutenberg plugin created via create-guten-block.
 * Author: Lauren Zache
 * Author URI:
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package lz-plugin
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
