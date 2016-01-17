<?php

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 280, 210, true ); // Normal post thumbnails
    add_image_size( 'screen-shot', 720, 540 ); // Full size screen
}
register_taxonomy("project", array("projects"), array("hierarchical" => true, "label" => "Project Types", "singular_label" => "Project Type", "rewrite" => true));

register_post_type( 'projects',
array(
   'labels' => array(
      'name' => __( 'Projects' ),
      'singular_name' => __( 'Project' )
   ),
   'public' => true,
   'has_archive' => true,
   'show_in_nav_menus' => true,
   'supports' => array('thumbnail', 'title', 'editor', 'page-attributes')
   //	'has_thumbnail' =>
   )
);

/* Fire our meta box setup function on the post editor screen. */
add_action( 'load-post.php', 'test_post_meta' );
add_action( 'load-post-new.php', 'test_post_meta' );

function test_post_meta() {
	add_action('add_meta_boxes', 'adding_custom_meta_boxes');
}

/* Display the post meta box. */
function render_my_meta_box( $object, $box ) { ?>
	<p>
		<label for="smashing-post-class"><?php _e( "Add a custom CSS class, which will be applied to WordPress' post class.", 'example' ); ?></label>
		<br />
		<input class="widefat" type="text" name="smashing-post-class" id="smashing-post-class" value="<?php echo esc_attr( get_post_meta( $object->ID, 'smashing_post_class', true ) ); ?>" size="30" />
	</p>
	<?php }
	function adding_custom_meta_boxes( $post ) {
		add_meta_box(
		'my-meta-box',
		esc_html__( 'Post Class', 'example' ),    // Title
		'render_my_meta_box',
		'post',
		'side',
		'default'
	);
}

?>
