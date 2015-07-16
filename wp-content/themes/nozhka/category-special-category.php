<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 *
 * Category_Templates
 * https://codex.wordpress.org/Category_Templates
 */

get_header(); ?>


	<div class="container">

		<div class="content" role="main">

			<header class="archive-header">
				<h1 class="archive-title">
					<?php the_archive_title( '<span>**', '</span>' ); ?>
				</h1>
				<?php the_archive_description( '<em>', '</em>' ); ?>
			</header><!-- .archive-header -->

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php wp_paginate(); ?>

			<?php else: ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>