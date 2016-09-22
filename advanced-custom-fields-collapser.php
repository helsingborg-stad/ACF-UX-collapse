<?php

/**
 * Plugin Name:       Advanced Custom Fields Collapser
 * Plugin URI:        http://github.com/helsingborg-stad
 * Description:       Collapses mega-fieldgroups to make drag and drop sorting more accesible.
 * Version:           1.0.0
 * Author:            Kristoffer Svanmark
 * Author URI:        http://github.com/helsingborg-stad
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       advanced-custom-fields-collapser
 * Domain Path:       /languages
 */

 // Protect agains direct file access
if (! defined('WPINC')) {
    die;
}

define('ACFCOLLAPSER_PATH', plugin_dir_path(__FILE__));
define('ACFCOLLAPSER_URL', plugins_url('', __FILE__));
define('ACFCOLLAPSER_TEMPLATE_PATH', ACFCOLLAPSER_PATH . 'templates/');

load_plugin_textdomain('advanced-custom-fields-collapser', false, plugin_basename(dirname(__FILE__)) . '/languages');

require_once ACFCOLLAPSER_PATH . 'source/php/Vendor/Psr4ClassLoader.php';
require_once ACFCOLLAPSER_PATH . 'Public.php';

// Instantiate and register the autoloader
$loader = new AcfCollapser\Vendor\Psr4ClassLoader();
$loader->addPrefix('AcfCollapser', ACFCOLLAPSER_PATH);
$loader->addPrefix('AcfCollapser', ACFCOLLAPSER_PATH . 'source/php/');
$loader->register();

// Start application
new AcfCollapser\App();
