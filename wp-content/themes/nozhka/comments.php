<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 */
get_header(); ?>


<?php if ( have_comments() ) { ?>
	<h3><?php echo __( 'Comments', 'nozhka' ); ?></h3>

	<?php
	wp_list_comments( array(
		'style'       => 'ol',
		'short_ping'  => true,
		'avatar_size' => 74,
	));
	?>

<?php } else { ?>
	<p><?php echo __( 'No comments', 'nozhka' ); ?></p>
<?php } ?>