<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 */


add_filter( 'manage_edit-testimonial_columns', 'nozhka_admin_columns_testimonial' );

function nozhka_admin_columns_testimonial( $columns ) {

	$cols['cb']              = $columns['cb'];
	$cols['thumb']           = __( 'Image', 'nozhka' );
	$cols['title']           = $columns['title'];
	$cols['testimonial_tag'] = __( 'Tags', 'nozhka' );
	$cols['date']            = $columns['date'];

	return $cols;
}


add_action( 'manage_posts_custom_column' , 'nozhka_admin_testimonial_columns', 10, 2 );

function nozhka_admin_testimonial_columns( $columns, $post_id ) {

	switch( $columns ) {

		case ( 'thumb' ) :

			$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ) );
			$thumbnail = $thumbnail ? '<img src="' . $thumbnail[0] . '" width="' . $thumbnail[1] . '" heigth="' . $thumbnail[2] . '" class="nozhka-thumb" />' : '-';
			echo $thumbnail;

			break;

		case ( 'testimonial_tag' ) :

			$tags = get_the_terms( $post_id, 'testimonial_tag' );
			$i = 1;

			foreach( $tags as $item ) {
				$sep = $i < count( $tags ) ? ', ' : '';
				echo $item->name . $sep;
				$i++;
			}

			break;
	}
}
