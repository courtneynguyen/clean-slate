<?php
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 280, 210, true ); // Normal post thumbnails
    add_image_size( 'screen-shot', 720, 540 ); // Full size screen
}

	register_post_type( 'designs',
	array(
		'labels' => array(
			'name' => __( 'Designs' ),
			'singular_name' => __( 'Design' )
		),
		'public' => true,
		'has_archive' => true,
		'show_in_nav_menus' => true,
		'supports' => array('thumbnail', 'title', 'editor')
		//	'has_thumbnail' =>
		)
	);
?>
