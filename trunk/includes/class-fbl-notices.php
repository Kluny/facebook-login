<?php

/**
 * Class that handle all admin notices
 *
 * @since      1.0.4.1
 * @package    Facebook_Login
 * @subpackage Facebook_Login/includes
 * @author     Damian Logghe <info@timersys.com>
 */
class Fbl_Notices {

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.4.1
	 */
	public function __construct( ) {
	    $rate_plugin = isset( $_GET['fbl_notice'] ) ? sanitize_text_field( $_GET['fbl_notice'] ) : '';
		if( ! empty( $rate_plugin) && 'rate_plugin' === $rate_plugin ){
			update_option('fbl_'.$rate_plugin, true);
		}
	}


	public function rate_plugin(){
		if( get_option('fbl_plugin_updated') && !get_option('fbl_rate_plugin') ) {
			?>
			<div class="updated notice">
			<h3><i class=" dashicons-before dashicons-facebook-alt"></i>Facebook Login Plugin</h3>

			<p><?php echo sprintf( esc_html__( 'We noticed that you have been using our plugin for a while and we would like to ask you a little favour. If you are happy with it and can take a minute please <a href="%s" target="_blank">leave a nice review</a> on WordPress. It will be a tremendous help for us!', 'fbl' ), 'https://wordpress.org/support/view/plugin-reviews/wp-facebook-login?filter=5' ); ?></p>
			<ul>
				<li><?php echo sprintf( esc_html__( '<a href="%s" target="_blank">Leave a nice review</a>' ), 'https://wordpress.org/support/view/plugin-reviews/wp-facebook-login?filter=5' ); ?></li>
				<li><?php echo sprintf( esc_html__( '<a href="%s">I already did</a>' ), '?fbl_notice=rate_plugin' ); ?></li>
			</ul>
			</div><?php
		}
	}
}