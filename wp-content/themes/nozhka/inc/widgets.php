<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 */

include "widgets/amazing_post.php";


add_action( 'widgets_init', 'nozhka_init_widgets');

/**
 * Init widgets
 */
function nozhka_init_widgets() {
	register_widget('Amazing_Post');
}