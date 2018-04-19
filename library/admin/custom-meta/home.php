<?php
/**
 * Adds extra meta to home page.
 *
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || die();

add_action( 'add_meta_boxes', 'parallax_add_mb_home' );

/**
 * Adds meta boxes for products.
 *
 * @since 1.0.0
 * @access private
 */
function parallax_add_mb_home() {

	if ( parallax_field_helpers() === false ) {
		return;
	}

	if ( get_the_ID() !== (int) get_option( 'page_on_front' ) ) {
		return;
	}

	wp_enqueue_editor();

	add_filter( 'rbm_fieldhelpers_load_select2', '__return_true' );

	add_meta_box(
		'parallax-home-settings',
		'Page Settings',
		'parallax_mb_home_settings',
		'page'
	);
}

/**
 * Outputs the meta box for home page settings.
 *
 * @since 1.0.0
 * @access private
 */
function parallax_mb_home_settings() {

	parallax_field_helpers()->fields->do_field_textarea( 'music_embed', array(
		'group'       => 'home',
		'label'       => 'Music Embed',
		'rows'        => 12,
		'input_class' => 'widefat',
	) );

	parallax_field_helpers()->fields->save->initialize_fields( 'home' );
}