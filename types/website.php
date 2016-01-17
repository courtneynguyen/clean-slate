<?php
register_post_type( 'websites',
   array(
      'labels' => array(
         'name' => __( 'Websites'),
         'singular_name' => __( 'Website' )
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_nav_menus' => true,
      'supports' => array('thumbnail', 'title', 'editor')
      //	'has_thumbnail' =>
      )
   );
?>
