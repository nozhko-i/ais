<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 */

include ('inc/version.php');
include ('inc/widgets.php');
include ('inc/utils.php');
include ('inc/init.php');
include ('inc/vc.php');

include ('inc/admin/testimonial.php');


add_action( 'after_setup_theme', 'nozhka_theme_setup' );

/**
 * Theme setup
 */
if ( ! function_exists( 'nozhka_theme_setup' ) ) {
	function nozhka_theme_setup() {

		// This theme styles the visual editor with editor-style.css to match the theme style.
		add_editor_style();

		// Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );

		// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 255, 255, true );

		// Make theme available for translation
		// Translations can be filed in the /languages/ directory
		load_theme_textdomain( 'nozhka', get_template_directory() . '/lng' );

		// This theme uses wp_nav_menu() in one location.
		// Primary menu
		register_nav_menus( array(
			'primary' => __( 'Primary menu', 'nozhka' ),
		) );
	}
}


add_action( 'wp_enqueue_scripts', 'nozhka_register_styles' );

/**
 * Register style sheet and javascripts
 */
function nozhka_register_styles() {

	if ( is_admin() ) {
		return;
	}

	// Register google fonts
	wp_enqueue_style( 'font_open_sans', '//fonts.googleapis.com/css?family=PT+Sans', array(), null );
	wp_enqueue_style( 'font_open_sans' );

	// Register theme styles
	wp_register_style( 'nozhka', get_template_directory_uri() . '/style.css', array(), VERSION );
	wp_enqueue_style( 'nozhka' );

	// Register jQuery
	wp_register_script( 'jquery_lib', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '2.1.3', true );
	wp_enqueue_script( 'jquery_lib' );
}


add_action( 'widgets_init', 'nozhka_register_widgets' );

/**
 * Register sidebar
 */
function nozhka_register_widgets() {
	register_sidebar( array(
		'name'           => __( 'Main sidebar', 'nozhka' ),
		'id'             => 'default',
		'description'    => __( 'Default sidebar', 'nozhka' ),
		'class'          => '',
		'before_widget'  => '<section>',
		'after_widget'   => '</section>',
		'before_title'   => '<h3>',
		'after_title'    => '</h3>',
	) );
}



add_filter('sanitize_file_name', 'nozhka_uploaded_filename_hash', 10);

/**
 *
 * MD5 for uploaded files
 *
 * @param $filename
 *
 * @return string
 *
 */
function nozhka_uploaded_filename_hash( $filename ) {
	$info = pathinfo($filename);
	$ext  = empty($info['extension']) ? '' : '.' . $info['extension'];
	$name = basename($filename, $ext);
	return md5( md5($name) . date('Y-m-d h:i:s') ) . $ext;
}


add_action('nozhka_do_footer_scripts', 'nozhka_comment_form_validation');

/**
 * Comment form JavaScript validation
 */
function nozhka_comment_form_validation() {
	?>
	<script>
		$('#commentform').attr('novalidate', 'novalidate');
		$('#submit').click(function() {
			hasErrors = false;
			$("form :required").each(function() {
				var input = $(this);
				if (input.val() == '') {
					hasErrors = true;
					$(input).addClass('err_required');
				}
			});
			if (hasErrors) {
				return false;
			}
		});
	</script>
	<?php
}