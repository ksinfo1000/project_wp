<?php
/*
Plugin Name: JigoShop Multilingual
Plugin URI: http://www.wpml.org/
Description: JigoShop Multilingual plugin. <a href="http://www.wpml.org/jigoshop-multilingual/">Documentation</a>.
Author: ICanLocalize
Author URI: http://www.wpml.org/
Version: 1.1
*/

define( 'JSML_VERSION', '1.1' );
define( 'JSML_PLUGIN_PATH', dirname( __FILE__ ) );
define( 'JSML_PLUGIN_CLASSES_PATH', JSML_PLUGIN_PATH . '/classes' );
define( 'JSML_PLUGIN_FOLDER', basename( JSML_PLUGIN_PATH ) );
define( 'JSML_PLUGIN_URL', plugins_url() . '/' . JSML_PLUGIN_FOLDER );

require( JSML_PLUGIN_CLASSES_PATH . '/wpml.class.php' );

$jigoshopml = new JigoShopML();

?>
