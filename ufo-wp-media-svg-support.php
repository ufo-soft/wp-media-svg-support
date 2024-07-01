<?php
  /**
  	 * @package WP Media SVG Support
  	 * @version 1.0.0
 **/

  /*
    * Author:                 UFO Soft
    * Author URI:             http://ufo.software/
    * Plugin Name:            WP Media SVG Support
    * Plugin URI:             https://github.com/ufo-soft/wp-media-svg-support
    * Description:            Adds SVG support to uploaded media in WordPress.
    * Requires PHP:           7.4
    * Requires at least:      6.0
    * Version: 1.0.0
	*/

  defined( 'ABSPATH' ) || exit;

  require_once('functions/index.php');

  /* Actions */
  add_action('admin_init', 'ufo_add_fix_svg_thumbnail_field');
  add_action('admin_head', 'ufo_fix_svg_thumbnail');

  /* Filters */
  add_filter('upload_mimes', 'ufo_add_svg_mime_type');
  add_filter('wp_check_filetype_and_ext', 'ufo_upload_svg_hook', 10, 4);
