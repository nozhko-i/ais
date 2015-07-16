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

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php wp_paginate(); ?>

	<?php else: ?>
		<?php get_template_part( 'content', 'none' ); ?>
		<div class="ntd"><?php echo __( 'Nothing to display', 'nozhka' ); ?></div>
	<?php endif; ?>

	</div>

	<?php get_sidebar(); ?>

</div>



<?php

get_footer();