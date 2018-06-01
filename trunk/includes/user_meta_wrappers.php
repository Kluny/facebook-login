<?php
/**
 * Wrappers for user_meta methods to allow use of user_attributes on VIP.
 */

function fbl_get_user_meta( $user_id, $key = '', $single = false ){
	if( function_exists('get_user_attribute') ) {
		return get_user_attribute( $user_id, $key, $single );
	}

	return get_user_meta( $user_id, $key, $single );
}

function fbl_upate_user_meta( $user_id, $meta_key, $meta_value, $prev_value = '' ) {
	if( function_exists('update_user_attribute') ) {
		return update_user_attribute( $user_id, $meta_key, $meta_value, $prev_value );
	}

	return update_user_meta( $user_id, $meta_key, $meta_value, $prev_value );
}

function fbl_delete_user_meta( $user_id, $meta_key, $meta_value = '' ) {
	if( function_exists('delete_user_attribute') ) {
		return delete_user_attribute( $user_id, $meta_key, $meta_value );
	}

	return delete_user_meta( $user_id, $meta_key, $meta_value );
}