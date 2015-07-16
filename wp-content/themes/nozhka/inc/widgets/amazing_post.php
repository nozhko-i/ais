<?php
/**
 * @Packege Wordpress
 * @Subpackege Nozhka
 * @Since 1.0.0
 */


class Amazing_Post extends WP_Widget {

	/**
	 * Construncor
	 * Sets up the widgets name etc
	 */
	public function __construct() {

		parent::__construct(
			'amazing_post_widget', // Base ID
			__( 'Amazing Post', 'nozhka' ), // Name
			array( 'description' => __( 'Amazing post widget', 'nozhka' ), ) // Args
		);
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {

		echo $args['before_widget'];

		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}

		echo nozhka_amazing_post_get( intval( $instance['post_id'] ) );

		echo $args['after_widget'];
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {

		$title      = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Title', 'nozhka' );
		$need_post  = ! empty( $instance['post_id'] ) ? $instance['post_id'] : '';

		$posts = get_posts( array(
			'numberposts' => -1,
		));

		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Post:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'post_id' ); ?>"><?php _e( 'Post:' ); ?></label>
			<select id="<?php echo $this->get_field_id( 'post_id' ); ?>" name="<?php echo $this->get_field_name( 'post_id' ); ?>">
				<?php foreach( $posts as $item ) : ?>
					<?php if ( $need_post == $item->ID ) { ?>
						<option value="<?php echo $item->ID ?>" selected="selected"><?php echo $item->post_title; ?></option>
					<?php } else { ?>
						<option value="<?php echo $item->ID ?>"><?php echo $item->post_title; ?></option>
					<?php } ?>
				<?php endforeach; ?>
			</select>
		</p>
		<?php
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = array();
		$instance['title']    = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['post_id']  = ( ! empty( $new_instance['post_id'] ) ) ? strip_tags( $new_instance['post_id'] ) : '';

		return $instance;
	}
}