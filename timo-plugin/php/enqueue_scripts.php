<?php
/**
 * Created by PhpStorm.
 * User: Timo
 * Date: 02.11.2017
 * Time: 15:08
 */

add_action( 'admin_enqueue_scripts', 'plugin_activated_message' );

function plugin_activated_message() {
	wp_enqueue_script( 'activation_message', PLUGIN_URI . 'public/js/activation.js', [], PLUGIN_PATH . 'public/js/activation.js', true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts');

function enqueue_scripts() {
	wp_enqueue_script( 'input_widget', PLUGIN_URI . 'public/js/input_widget.js', [ 'jquery' ], filemtime( PLUGIN_PATH . 'public/js/input_widget.js' ), false );
}

