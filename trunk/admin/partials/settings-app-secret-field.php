<?php
/**
 * Represents the partial view for where users can enter fb secret key
 *
 * @since      1.0.0
 *
 * @subpackage Facebook_Login_Pro/Admin/Partials
 * @package    Facebook_Login_Pro
 *
 */
?>

<input type="password" name="fbl_settings[fb_app_secret]" value="<?php echo esc_attr( $fb_app_secret ); ?>" placeholder="<?php esc_html_e( 'Facebook App Secret key', 'flp' ); ?>" />
<p class="description" ><?php esc_html_e('Paste your App secret key', 'flp');?></p>