<?php
class ContactForm extends WP_Widget {
	public function __construct() {
		parent::__construct( '', 'CONTACT ME PLZ0R',
		array( 'description' => __( 'Widget that would have been a simple contact form.') ));
	}
	public function widget( $args, $instance ) {
		echo 'HELLO WORLD';
	}

	/**
	 * Deal with the settings when they are saved by the admin.
	 * Here is where any validation should happen.
	 * @param array $new_instance New widget instance.
	 * @param array $instance     Original widget instance.
	 * @return array Updated widget instance.
	 */
	function update( $new_instance, $instance ) {
		return $instance;
	}
	/**
	 * Display the form for this widget on the Widgets page of the Admin area.
	 * @param array $instance
	 */
	function form( $instance ) {

	?>
			<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'twentyfourteen' ); ?></label>
			<input
			id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
			class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
			type="text"
			value="Hi, Courtney!">
		</p>
<?php }} ?>
