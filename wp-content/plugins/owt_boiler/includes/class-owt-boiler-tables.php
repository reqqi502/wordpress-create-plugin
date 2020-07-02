<?php

/**
 * file contains definition of  tables section.
 *
 * @link       http://onlinewebtutorhub.blogspot.in/
 * @since      1.0.0
 *
 * @package    Owt_boiler
 * @subpackage Owt_boiler/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Owt_boiler
 * @subpackage Owt_boiler/includes
 * @author     online web tutor <akram.rq.12@gmail.com>
 */
class Owt_boiler_tables {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public function owtboliertable(){
		global $wpdb;
		return $wpdb->prefix."owt_boiler_table";
	}

}