<?php

class Input_Widget extends WP_Widget {

	public function __construct() {
		$widget_ops = array(
			'classname' => 'Input Widget',
		);
		parent::__construct( 'my_widget', 'Input Widget', $widget_ops );
		add_action( 'widgets_init', function(){
			register_widget( 'Input_Widget' );
		});
	}
	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) { ?>

		<form>
			<input id="input_widget" type="text">
		</form>
		<button id="btn_widget">Bitte klicken</button>
		<div id="target_div"></div>
	<?php
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options.
	 * @return void
	 */
	public function form( $instance ) {
		// outputs the options form on admin
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options.
	 * @param array $old_instance The previous options.
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}
