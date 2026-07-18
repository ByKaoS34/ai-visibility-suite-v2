<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="wrap">

	<h1>AI Visibility Suite - Settings</h1>

	<form method="post" action="options.php">

		<?php
		settings_fields( 'avs_settings_group' );
		do_settings_sections( 'avs_settings_group' );
		?>

		<table class="form-table">

			<tr>
				<th scope="row">Site Name</th>
				<td>
					<input type="text"
						name="avs_site_name"
						value="<?php echo esc_attr( get_option( 'avs_site_name', get_bloginfo( 'name' ) ) ); ?>"
						class="regular-text">
				</td>
			</tr>

			<tr>
				<th scope="row">Site Description</th>
				<td>
					<textarea
						name="avs_site_description"
						rows="4"
						class="large-text"><?php echo esc_textarea( get_option( 'avs_site_description', get_bloginfo( 'description' ) ) ); ?></textarea>
				</td>
			</tr>

		</table>

		<?php submit_button(); ?>

	</form>

</div>