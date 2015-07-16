<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 */

get_header(); ?>

	<div class="container">

		<div class="content" role="main">

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<header>
							<h1><?php the_title(); ?></h1>
						</header>
						<footer>
							<?php nozhka_testimonial_meta( get_the_ID() ); ?>
						</footer>
						<div class="entry_content">
							<?php the_content(); ?>
						</div>
					</article>

				<?php endwhile; ?>
			<?php else: ?>
				<?php get_template_part( 'content', 'none' ); ?>
				<div class="ntd"><?php echo __( 'Nothing to display', 'nozhka' ); ?></div>
			<?php endif; ?>

		</div>

		<?php get_sidebar(); ?>

	</div>


<?php get_footer(); ?>