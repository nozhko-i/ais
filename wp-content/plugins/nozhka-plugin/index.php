<?php
/**
 * Plugin Name: Nozhka Plugin
 * Plugin URI: https://github.com/nozhko-i/nozhka-plugin
 * Description: Change title plugin
 * Version: 1.0.0
 * Author: Nozhka Ivan
 * Author URI: https://github.com/nozhko-i
 */

add_action( 'plugins_loaded', 'np_plugin_load_textdomain' );

function np_plugin_load_textdomain() {
	load_plugin_textdomain( 'nozhka', false, '/nozhka-plugin/lng' );
}

class Nozhka_Plugin {

	/**
	 * Constructor
	 */
	public function __construct()
	{
		// Base plugin directory uri
		$this->base = plugins_url('nozhka-plugin');

		add_filter('the_title', array( $this, 'nozhka_the_title_add_date' ));
	}

	/**
	 * Add cteated date ti the page, post title
	 *
	 * @param $title
	 *
	 * @return string
	 */
	public function nozhka_the_title_add_date( $title ) {

		if ( !in_the_loop() ) {
			return $title;
		}

		global $post;

		return $title . ' <em>('. get_the_date( '', $post ) .')</em>';
	}
}


// Run the plugin
add_action('init', 'call_nozhka_plugin');

/**
 * Create object
 */
function call_nozhka_plugin() {
	new Nozhka_Plugin();
}
