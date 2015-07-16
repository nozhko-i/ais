<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 *
 * Archive
 * @link https://codex.wordpress.org/Post_Type_Templates
 */

get_header(); ?>


	<div class="container">

		<div class="content" role="main">

			<header class="archive-header">

				<h1 class="archive-title">
					<?php //the_archive_title( '<span class="text-center center-block">', '</span>' ); ?>
					<?php echo __( 'Testimonials', 'nozhka' ); ?>
				</h1>
			</header><!-- .archive-header -->

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'testimonial' ); ?>
				<?php endwhile; ?>

				<?php wp_paginate(); ?>

			<?php else: ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>