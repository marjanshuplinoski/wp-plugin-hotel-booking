<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://majorsoftware.xyz
 * @since      1.0.0
 *
 * @package    Hotel_Booking
 * @subpackage Hotel_Booking/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Hotel_Booking
 * @subpackage Hotel_Booking/includes
 * @author     Marjan Shuplinoski <marjan.shuplinoski@gmail.com>
 */
class Hotel_Booking_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'hotel-booking',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
