<?php
/**
 * Represents the partial view for where users can enter fb app id
 *
 * @since      1.0.0
 *
 * @subpackage Facebook_Login/Admin/Partials
 * @package    Facebook_Login
 *
 */
?>

<input type="text" name="fbl_settings[fb_id]" value="<?php echo esc_attr( $fb_id ); ?>" placeholder="<?php esc_html_e( 'Facebook App id', 'fbl' ); ?>" />
<p class="description" ><?php esc_html_e('Create a new app and paste App Id here', 'fbl');?></p>