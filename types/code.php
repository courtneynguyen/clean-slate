<?php
register_taxonomy("code", array('code'), array("hierarchical" => true, "label" => "Code Types", "singular_label" => "Code Type", "rewrite" => true));

register_post_type( 'code',
array(
   'labels' => array(
      'name' => __( 'Code' ),
      'singular_name' => __( 'Code' )
   ),
   'public' => true,
   'has_archive' => true,
   'show_in_nav_menus' => true,
   'supports' => array('thumbnail', 'title', 'editor', 'page-attributes')
   //	'has_thumbnail' =>
   )
);

?>
