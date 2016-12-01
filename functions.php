<?php
define( 'NOCLUE_VERSION', 1.0 );
define( 'BOOTSTRAP_VERSION', 'v4-dev');
require_once('types/project.php');
require_once('types/website.php');
require_once('types/design.php');
require_once('types/code.php');
require_once('widgets/ContactForm.php');

add_theme_support( 'automatic-feed-links' );

register_sidebar( array(
	'name'          => 'Underneath Base Page Content',
	'id'            => 'contactme-1',
	'description'   => 'Section underneath content from the base page template.',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h1 class="widget-title">',
	'after_title'   => '</h1>',
), 'arg-1', 'failed-contact-form-class' );

function noclue_widget_init() {
	register_widget( 'ContactForm' );

}
add_action( 'widgets_init', 'noclue_widget_init' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function my_scripts()  {

	// get the theme directory styles/style.css and link to it in the header
	wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/lib/bootstrap/dist/css/bootstrap.css');
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/styles/style.css');

	/*
	https://codex.wordpress.org/Function_Reference/wp_enqueue_script
	wp_enqueue_script($header, $path, $dependency array, $version, $in_footer)
	*/
	wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/lib/bootstrap/dist/js/bootstrap.js', array(
		'jquery'
	), BOOTSTRAP_VERSION, true);
	wp_enqueue_script( 'noclue', get_template_directory_uri() . '/js/main.js', array(
		'jquery'
	), NOCLUE_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'my_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header

add_filter('stylesheet_uri','wpi_stylesheet_uri',10,2);

/**
* Hooks the WP cpt_post_types filter
*
* @param array $post_types An array of post type names that the templates be used by
* @return array The array of post type names that the templates be used by
**/
function my_cpt_post_types( $post_types ) {
	$post_types[] = 'projects';
	$post_types[] = 'actor';
	return $post_types;
}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );

/**
 * registers menu
 */
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
	register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );
