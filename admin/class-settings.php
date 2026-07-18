<?php
/**
 * Settings class.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class AVS_Settings {

	public function __construct() {
		add_action( 'admin_init', array( $this, 'register_settings' ) );
	}

	public function register_settings() {

		register_setting(
			'avs_settings_group',
			'avs_site_name',
			array(
				'type'              => 'string',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => get_bloginfo( 'name' ),
			)
		);

		register_setting(
			'avs_settings_group',
			'avs_site_description',
			array(
				'type'              => 'string',
				'sanitize_callback' => 'sanitize_textarea_field',
				'default'           => get_bloginfo( 'description' ),
			)
		);
	}
}