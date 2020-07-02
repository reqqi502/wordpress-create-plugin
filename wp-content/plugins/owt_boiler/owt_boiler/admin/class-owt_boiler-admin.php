<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://onlinewebtutorhub.blogspot.in/
 * @since      1.0.0
 *
 * @package    Owt_boiler
 * @subpackage Owt_boiler/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Owt_boiler
 * @subpackage Owt_boiler/admin
 * @author     online web tutor <akram.rq.12@gmail.com>
 */
class Owt_boiler_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Owt_boiler_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Owt_boiler_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/owt_boiler-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Owt_boiler_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Owt_boiler_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/owt_boiler-admin.js', array( 'jquery' ), $this->version, false );

	}
	public function owt_menus_sections(){
		global $wpdb;
		add_menu_page("OWT Setting","OWT Setting","","owt-menus",array($this,"owt_Dashbord"),"dashicons-heart
		",30);
	
		add_submenu_page("owt-menus","Dashbord","Dashbord","manage_options","owt_settings",array($this,"owt_Dashbord"));
		add_submenu_page("owt-menus","Setting","Setting","manage_options","owt-setting",array($this,"owt_setting"));
	
	}
	public function owt_Dashbord(){
		include_once OWT_BOILER_PLAGIN_DIR.'/admin/partials/owt-menu-dashbord.php';
	}
	public function owt_setting(){

		include_once OWT_BOILER_PLAGIN_DIR.'/admin/partials/owt-menu-setting.php';

	}
}
