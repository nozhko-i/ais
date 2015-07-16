<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header>
		<h1><?php the_title(); ?></h1>
	</header>
	<footer>
		<?php nozhka_entry_meta_post_date( get_the_ID() ); ?>
	</footer>
	<div class="entry_content">
		<?php the_content(); ?>
	</div>
</article>

