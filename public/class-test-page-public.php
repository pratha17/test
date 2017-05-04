<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    test_page
 * @subpackage test_page/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    test-page
 * @subpackage test-page/public
 * @author     Your Name <email@example.com>
 */
class Test_Page_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $test_page    The ID of this plugin.
	 */
	private $test_page;

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
	 * @param      string    $test_page       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $test_page, $version ) {

		$this->test_page = $test_page;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in test_page_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The test_page_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->test_page, plugin_dir_url( __FILE__ ) . 'css/test-page-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in test_page_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The test_page_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->test_page, plugin_dir_url( __FILE__ ) . 'js/test-page-public.js', array( 'jquery' ), $this->version, false );

	}

}
