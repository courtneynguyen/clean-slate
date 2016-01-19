<?php

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 280, 210, true ); // Normal post thumbnails
    add_image_size( 'screen-shot', 720, 540 ); // Full size screen
}
// register_taxonomy("project", array("projects"), array("hierarchical" => true, "label" => "Project Types", "singular_label" => "Project Type", "rewrite" => true));

register_post_type( 'projects',
array(
   'labels' => array(
      'name' => __( 'Projects' ),
      'singular_name' => __( 'Project' )
   ),
   'public' => true,
   'has_archive' => true,
   'show_in_nav_menus' => true,
   'supports' => array('thumbnail', 'title', 'editor')
   )
);

?>
