<?php

/**
 * Fired during plugin deactivation
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
class Owt_boiler_Deactivator {
		private $table;
	public function __construct($table_object){
		$this->table = $table_object;
	}

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public function deactivate() {
		global $wpdb;
		$wpdb->query("drop table IF EXISTS " . $this->table->owtboliertable());

	}

}
