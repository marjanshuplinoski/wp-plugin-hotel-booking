<?php

/**
 * Fired during plugin activation
 *
 * @link       https://majorsoftware.xyz
 * @since      1.0.0
 *
 * @package    Hotel_Booking
 * @subpackage Hotel_Booking/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Hotel_Booking
 * @subpackage Hotel_Booking/includes
 * @author     Marjan Shuplinoski <marjan.shuplinoski@gmail.com>
 */
class Hotel_Booking_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		if(!current_user_can('activate_plugins')) return;

		add_option("hotelbooking_posts_per_page",10);
		add_option("hotelbooking_show_welcome_page",true);
	}

}
