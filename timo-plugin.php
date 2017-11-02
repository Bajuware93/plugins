<?php
/**
 * Plugin Name: Timo Plugin
 */

define( 'PLUGIN_URI', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

include_once( plugin_dir_path( __FILE__ ) . 'php/enqueue_scripts.php' );
include_once( plugin_dir_path( __FILE__ ) . 'php/Input_Widget.php' );

new Input_Widget();



