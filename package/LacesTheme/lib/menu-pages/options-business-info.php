<?php

add_action( 'admin_init', 'business_options_init' );
add_action( 'admin_menu', 'business_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function business_options_init(){
	register_setting( 'business_options', 'business_options_field', 'business_options_validate' );
}

/**
 * Load up the menu page
 */
function business_options_add_page() {
	add_menu_page( 'Business Info', 'Business Info', 'edit_theme_options', 'business_options', 'business_options_do_page','dashicons-phone', '29.1');
}

/**
 * Create the options page
 */
function business_options_do_page() {

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

?>
	<div class="wrap">
		<h2>Business Info</h2>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php echo 'Content saved'; ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'business_options' ); ?>
			<?php $options = get_option( 'business_options_field' ); ?>

			<table class="form-table">
				<tr>
					<td>
						<label for="business_options_field[address1]">Address</label>
					</td>
					<td>
						<textarea rows="4" id="business_options_field[address1]" class="regular-text" name="business_options_field[address1]"><?php esc_attr_e( $options['address1'] ); ?></textarea>
					</td>
				</tr>				
				<tr>
					<td>
						<label for="business_options_field[phone]">Phone</label>
					</td>
					<td>
						<input id="business_options_field[phone]" class="regular-text" type="text" name="business_options_field[phone]" value="<?php esc_attr_e( $options['phone'] ); ?>" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="business_options_field[fax]">Fax</label>
					</td>
					<td>
						<input id="business_options_field[fax]" class="regular-text" type="text" name="business_options_field[fax]" value="<?php esc_attr_e( $options['fax'] ); ?>" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="business_options_field[email]">Email</label>
					</td>
					<td>
						<input id="business_options_field[email]" class="regular-text" type="text" name="business_options_field[email]" value="<?php esc_attr_e( $options['email'] ); ?>" />
					</td>
				</tr>				
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="Save" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function business_options_validate( $input ) {

	$input['address1'] = wpautop(wp_filter_nohtml_kses($input['address1'] ));
	$input['phone'] = wp_filter_nohtml_kses( $input['phone'] );
	$input['Fax'] = wp_filter_nohtml_kses( $input['Fax'] );
	$input['email'] = wp_filter_nohtml_kses( $input['email'] );



	return $input;
}
/*****
call:
<?php
    $options = get_option('business_options_field');
    echo $options['facebook_link'];
?>
*****/

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/