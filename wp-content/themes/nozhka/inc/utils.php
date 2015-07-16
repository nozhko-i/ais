<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 */

/**
 * @param        $str
 * @param string $comments
 */
function debug($str, $comments=""){
	echo "<pre style=\"border:1px solid #000000; color: #000000; background-color: #CDCDCD;\"><b>$comments</b>\n"; print_r($str); echo "\n</pre>\n<br />\n";
}

/**
 *
 * @param $post_id
 */
function nozhka_entry_meta( $post_id ) {
	?>
	<span class="post_meta">
		<span class="label">Date: </span>
        <a href="<?php echo get_site_url() . '/' . get_the_date( 'Y/m', $post_id ); ?>"><?php echo get_the_date( 'Y-m-d', $post_id ) ?></a>
    </span>
	<span class="post_meta">
		<span class="label">Categories: </span>
		<?php $terms = get_the_terms( $post_id, 'category' ); ?>
		<?php if ( $terms ) : ?>
			<?php foreach ( $terms as $term ) : ?>
				<a href="<?php get_site_url() ?>/category/<?php echo $term->slug; ?>/"><?php echo $term->name; ?></a>
			<?php endforeach; ?>
		<?php endif; ?>
    </span>
	<span class="post_meta">
		<span class="label">Tags: </span>
		<?php $terms = get_the_tags( $post_id, 'tag' ); ?>
		<?php if ( $terms ) : ?>
			<?php foreach ( $terms as $term ) : ?>
				<a href="<?php get_site_url() ?>/tag/<?php echo $term->slug; ?>/"><?php echo $term->name; ?></a>
			<?php endforeach; ?>
		<?php endif; ?>
    </span>
<?php
}

/**
 * @param $post_id
 */
function nozhka_testimonial_meta( $post_id ) {
	?>
	<span class="post_meta">
		<span class="label">Date: </span>
        <a href="<?php echo get_site_url() . '/' . get_the_date( 'Y/m', $post_id ); ?>"><?php echo get_the_date( 'Y-m-d', $post_id ) ?></a>
    </span>
	<span class="post_meta">
		<span class="label">Tags: </span>
		<?php $terms = get_the_terms( $post_id, 'testimonial_tag' ); ?>
		<?php if ( $terms ) : ?>
			<?php foreach ( $terms as $term ) : ?>
				<a href="<?php get_site_url() ?>/testimonial_tag/<?php echo $term->slug; ?>/"><?php echo $term->name; ?></a>
			<?php endforeach; ?>
		<?php endif; ?>
    </span>
<?php
}

/**
 * @param $post_id
 */
function nozhka_entry_meta_post_date( $post_id ) {
	?>
	<span class="post_meta">
		<span class="key">Publish date</span>
        <a href="<?php echo get_site_url() . '/' . get_the_date( 'Y/m', $post_id ); ?>" class="value"><?php echo get_the_date( 'Y-m-d', $post_id ) ?></a>
    </span>
	<?php
}

/**
 * Get amazing post with comments number
 * @param $post_id
 */
function nozhka_amazing_post_get( $post_id ) {
	$need_post = get_post( $post_id );
	if ( ! $need_post ) {
		return __( 'Nothing to display', 'nozhka' );
	}
	return '<a href="'. get_the_permalink( $post_id ) .'">' . $need_post->post_title . ' ('. get_comments_number( $post_id ) .')' . '</a>';

}

