<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://onlinewebtutorhub.blogspot.in/
 * @since      1.0.0
 *
 * @package    Owt_boiler
 * @subpackage Owt_boiler/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Owt_boiler
 * @subpackage Owt_boiler/includes
 * @author     online web tutor <akram.rq.12@gmail.com>
 */
class Owt_boiler_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'owt_boiler',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
