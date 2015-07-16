<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 */
?>


<footer class="footer clearfix" id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<span class="small">&copy; <?php echo date('Y') ?> <?php bloginfo( 'sitename' ); ?>. <?php echo __( 'All rights reserved', 'nozhka' ) ?>.</span>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<?php do_action( 'nozhka_do_footer_scripts' ); ?>

</body>
</html>