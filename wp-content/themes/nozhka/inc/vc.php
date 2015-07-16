<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 */

add_filter( 'vc_grid_item_shortcodes', 'nozhka_vc_grid_shortcodes' );

/**
 * @param $shortcodes
 *
 * @return mixed
 */
function nozhka_vc_grid_shortcodes( $shortcodes ) {

	$shortcodes['ais_test'] = array(
		'name' => __( 'Say Hello', 'nozhka' ),
		'base' => 'vc_say_hello',
		'category' => __( 'Content', 'nozhka' ),
		'description' => __( 'Just outputs Hello World', 'nozhka' ),
		'post_type' => Vc_Grid_Item_Editor::postType(),
	);

	return $shortcodes;
}

add_shortcode( 'vc_say_hello', 'vc_say_hello_render' );
function vc_say_hello_render() {
	return '<h2>Hello, World!</h2>';
}