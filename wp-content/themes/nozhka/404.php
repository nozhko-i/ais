<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 */

get_header();
?>


	<div class="container">

		<div class="content" role="main">

			<article class="error-404">
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				<div class="entry_content">
					<h2><?php echo __( '404', 'nozhka' ); ?></h2>
					<p>Page not found</p>
				</div>
			</article>

		</div>

		<?php get_sidebar(); ?>

	</div>



<?php

get_footer();