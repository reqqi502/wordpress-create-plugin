<?php

/**
 * Fired during plugin activation
 *
 * @link       http://onlinewebtutorhub.blogspot.in/
 * @since      1.0.0
 *
 * @package    Owt_boiler
 * @subpackage Owt_boiler/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Owt_boiler
 * @subpackage Owt_boiler/includes
 * @author     online web tutor <akram.rq.12@gmail.com>
 */
class Owt_boiler_Activator {
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
	public function activate() {

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		global $wpdb;
		if(count($wpdb->get_var("show tables like '".$this->table->owtboliertable()."'")) ==0){
		$sqlQuery = 'CREATE TABLE `'.$this->table->owtboliertable().'` (
				`name` varchar(255) DEFAULT NULL,
				`email` varchar(255) DEFAULT NULL,
				`phone_no` varchar(15) DEFAULT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4';
		
		dbDelta($sqlQuery);
	  
		 }
		
	}

}
