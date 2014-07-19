<?php
/**
 * Load up custom.css
 * @return void
 */
if ( !function_exists('sofa_child_enqueue_scripts') && !is_admin() ) {
	
	function sofa_child_enqueue_scripts() {
		wp_register_style( 'child_custom', get_stylesheet_directory_uri() . "/custom.css" );
        wp_enqueue_style( 'child_custom' );
	}

	add_action('wp_enqueue_scripts', 'sofa_child_enqueue_scripts', 99);
}

function sofa_edd_log_test_payment_stats() {
	return true;
}
// add_filter('edd_log_test_payment_stats', 'sofa_edd_log_test_payment_stats');


function franklin_child_atcf_shortcode_submit_fields($fields) {
    unset( $fields['rewards'] );
    unset( $fields['physical'] );
    unset( $fields['norewards'] );
    return $fields;
}

add_filter( 'atcf_shortcode_submit_fields', 'franklin_child_atcf_shortcode_submit_fields' );