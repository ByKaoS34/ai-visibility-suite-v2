<?php
/**
 * Admin menu class.
 *
 * @package AI_Visibility_Suite
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class AVS_Admin {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'register_menu' ) );
	}

	/**
	 * Register admin menu.
	 */
	public function register_menu() {

		add_menu_page(
			'AI Visibility Suite',
			'AI Visibility',
			'manage_options',
			'ai-visibility-suite',
			array( $this, 'dashboard_page' ),
			'dashicons-search',
			80
		);

		add_submenu_page(
			'ai-visibility-suite',
			'Dashboard',
			'Dashboard',
			'manage_options',
			'ai-visibility-suite',
			array( $this, 'dashboard_page' )
		);

		add_submenu_page(
			'ai-visibility-suite',
			'Settings',
			'Settings',
			'manage_options',
			'ai-visibility-settings',
			array( $this, 'settings_page' )
		);
	}

	/**
	 * Dashboard page.
	 */
	public function dashboard_page() {

		echo '<div class="wrap">';
		echo '<h1>AI Visibility Suite</h1>';
		echo '<p>Welcome to AI Visibility Suite v2.0</p>';
		echo '</div>';

	}

	/**
	 * Settings page.
	 */
	public function settings_page() {

	require AVS_PATH . 'admin/views/settings.php';

}