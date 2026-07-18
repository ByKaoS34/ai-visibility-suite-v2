<?php
/**
 * Plugin Name: AI Visibility Suite
 * Plugin URI: https://github.com/ByKaoS34/ai-visibility-suite-v2
 * Description: AI Visibility Suite for WordPress.
 * Version: 2.0.0-alpha
 * Requires at least: 6.5
 * Requires PHP: 8.0
 * Author: ByKaoS34
 * License: GPL-2.0-or-later
 * Text Domain: ai-visibility-suite
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AVS_VERSION', '2.0.0-alpha' );
define( 'AVS_PATH', plugin_dir_path( __FILE__ ) );
define( 'AVS_URL', plugin_dir_url( __FILE__ ) );
define( 'AVS_FILE', __FILE__ );
require_once AVS_PATH . 'admin/class-admin.php';
require_once AVS_PATH . 'admin/class-settings.php';


new AVS_Admin();
new AVS_Settings();
