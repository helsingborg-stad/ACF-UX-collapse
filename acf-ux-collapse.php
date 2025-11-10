<?php

/**
 * Plugin Name:       ACF UX Collapse
 * Plugin URI:        http://github.com/helsingborg-stad/ACF-UX-collapse
 * Description:       Imrpoves the ACF repeater-field UX by adding collapsing top-level functionality
 * Version: 2.0.7
 * Author:            Kristoffer Svanmark
 * Author URI:        http://github.com/helsingborg-stad
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       advanced-custom-fields-collapser
 * Domain Path:       /languages
 */

use WpService\Implementations\NativeWpService;
use WpUtilService\WpUtilService;

 // Protect agains direct file access
if (! defined('WPINC')) {
    die;
}

define('ACFUXCOLLAPSE_PATH', plugin_dir_path(__FILE__));
define('ACFUXCOLLAPSE_URL', plugins_url('', __FILE__));
define('ACFUXCOLLAPSE_TEMPLATE_PATH', ACFUXCOLLAPSE_PATH . 'templates/');

load_plugin_textdomain('advanced-custom-fields-collapser', false, plugin_basename(dirname(__FILE__)) . '/languages');

// Autoload from plugin
if (file_exists(ACFUXCOLLAPSE_PATH . 'vendor/autoload.php')) {
    require_once ACFUXCOLLAPSE_PATH . 'vendor/autoload.php';
}

require_once ACFUXCOLLAPSE_PATH . 'Public.php';

// Start application
$wpService = new NativeWpService();
$wpUtilService = new WpUtilService($wpService);

new AcfUxCollapse\App($wpUtilService->enqueue(__DIR__, '/dist'));