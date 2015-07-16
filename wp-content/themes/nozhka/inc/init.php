<?php
/**
* @package WordPress
* @subpackage EUZakupki
* @since EUZakupki 1.0.0
*
* Register post types and taxonomies
*
* @link http://codex.wordpress.org/Function_Reference/register_post_type
* @link https://codex.wordpress.org/Function_Reference/register_taxonomy
*/

add_action( 'init', 'nozhka_init' );

/**
 * Init custom post types and custom taxonomies
 */
function nozhka_init() {
	nozhka_register_post_types();
	nozhka_register_taxonomies();
}

/**
 * Register custom post types
 */
function nozhka_register_post_types() {
	nozhka_testimonials_post_types();
}

/**
 * Register custom taxonomies
 */
function nozhka_register_taxonomies() {
	nozhka_testimonials_tag_taxonomy();
}


/**
 * Register testimonials custom post types
 */
function nozhka_testimonials_post_types() {
	$labels = array(
		'name'                 => _x( 'Testimonials', 'post type general name', 'nozhka' ),
		'singular_name'        => _x( 'Testimonial', 'post type singular name', 'nozhka' ),
		'menu_name'            => _x( 'Testimonials', 'admin menu', 'nozhka' ),
		'name_admin_bar'       => _x( 'Testimonial', 'add new on admin bar', 'nozhka' ),
		'add_new'              => _x( 'Add new', 'book', 'nozhka' ),
		'add_new_item'         => __( 'Add new testimonial', 'nozhka' ),
		'new_item'             => __( 'Nwe testimonial', 'nozhka' ),
		'edit_item'            => __( 'Edit testimonial', 'nozhka' ),
		'view_item'            => __( 'View testimonial', 'nozhka' ),
		'all_items'            => __( 'All testimonials', 'nozhka' ),
		'search_items'         => __( 'Search testimonial', 'nozhka' ),
		'parent_item_colon'    => __( 'Parent testimonial:', 'nozhka' ),
		'not_found'            => __( 'Testimonials not found.', 'nozhka' ),
		'not_found_in_trash'   => __( 'Testimonials not found in trash', 'nozhka' )
	);

	$args = array(
		'labels'               => $labels,
		'public'               => true,
		'exclude_from_search'  => true,
		'show_ui'              => true,
		'show_in_menu'         => true,
		'query_var'            => false,
		'rewrite'              => true,
		'capability_type'      => 'post',
		'has_archive'          => true,
		'hierarchical'         => false,
		'menu_position'        => null,
		'supports'             => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'testimonial', $args );
}

/**
 * Register testimonial tags custom taxonomy
 */
function nozhka_testimonials_tag_taxonomy() {
	$labels = array(
		'name'                => _x( 'Tag', 'taxonomy general name', 'nozhka' ),
		'singular_name'       => _x( 'Tag', 'taxonomy singular name', 'nozhka' ),
		'search_items'        => __( 'Search tag', 'nozhka' ),
		'all_items'           => __( 'All tags', 'nozhka' ),
		'parent_item'         => __( 'Parent tag', 'nozhka' ),
		'parent_item_colon'   => __( 'Parent tag:', 'nozhka' ),
		'edit_item'           => __( 'Edit tag', 'nozhka' ),
		'update_item'         => __( 'Update tag', 'nozhka' ),
		'add_new_item'        => __( 'New tag', 'nozhka' ),
		'new_item_name'       => __( 'Name of new tag', 'nozhka' ),
		'menu_name'           => __( 'Tags', 'nozhka' ),
	);

	$args = array(
		'hierarchical'        => false,
		'labels'              => $labels,
		'show_ui'             => true,
		'show_admin_column'   => true,
		'query_var'           => false,
		'rewrite'             => true
	);

	register_taxonomy( 'testimonial_tag', 'testimonial', $args );
}
