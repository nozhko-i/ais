<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 */
?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title(''); ?></title>

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicons/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/img/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/img/favicons/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>

</head>
<body <?php echo body_class(); ?>>


<header class="header" id="header">
	<div class="container">
		<h1 class="hidden"><?php bloginfo('description') ?></h1>
		<nav class="navbar" role="navigation">
			<h2 class="hidden"><?php echo __( 'Navigation', 'nozhka' ); ?></h2>
			<div class="navbar-header">
				<a class="navbar-brand" href="/">
					<img alt="<?php echo __( 'Go to home page', 'nozhka' ) ?>" src="<?php echo get_template_directory_uri() ?>/img/logo.png"/>
				</a>
			</div>
			<div class="primary-navigation" id="navbar">

				<ul class="nav navbar-nav navbar-right">
					<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'container'      => '',
						'items_wrap'     => '%3$s',
					) ) ?>
				</ul>
			</div>
		</nav>
	</div>
</header><!-- // header -->