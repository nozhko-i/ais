<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>
	<footer>
		<?php nozhka_testimonial_meta( get_the_ID() ); ?>
	</footer>
	<div class="entry_content">
		<?php the_content( __( 'Read more', 'nozhka' ) ); ?>
	</div>
</article>

