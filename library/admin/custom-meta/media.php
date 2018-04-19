<?php
/**
 * Adds extra meta to Media page.
 *
 * @since 1.0.0
 */

defined( 'ABSPATH' ) || die();

add_action( 'add_meta_boxes', 'parallax_add_mb_media' );

/**
 * Adds meta boxes for products.
 *
 * @since 1.0.0
 * @access private
 */
function parallax_add_mb_media() {

	global $post;

	if ( parallax_field_helpers() === false ) {
		return;
	}

	if ( get_post_meta( $post->ID, '_wp_page_template', true ) !== 'page-templates/media.php' ) {
		return;
	}

	wp_enqueue_editor();

	add_filter( 'rbm_fieldhelpers_load_select2', '__return_true' );

	add_meta_box(
		'parallax-media-settings',
		'Page Settings',
		'parallax_mb_media_settings',
		'page'
	);
}

/**
 * Outputs the meta box for media page settings.
 *
 * @since 1.0.0
 * @access private
 */
function parallax_mb_media_settings() {

	parallax_field_helpers()->fields->do_field_repeater( 'music_embeds', array(
		'group'  => 'media',
		'label'  => 'Music Embeds',
		'fields' => array(
			'embed_code' => array(
				'type' => 'textarea',
				'args' => array(
					'label'       => 'Embed Code',
					'rows'        => 12,
					'input_class' => 'widefat',
				),
			),
			'description' => array(
				'type' => 'textarea',
				'args' => array(
					'label'       => 'Description',
					'rows'        => 8,
					'input_class' => 'widefat',
				),
			),
		),
	) );

	parallax_field_helpers()->fields->do_field_repeater( 'slideshows', array(
		'group'  => 'media',
		'label'  => 'Slideshows',
		'fields' => array(
			'title'       => array(
				'type' => 'text',
				'args' => array( 'label' => 'Title', ),
			),
			'id'          => array(
				'type' => 'text',
				'args' => array( 'label' => 'ID', ),
			),
			'description' => array(
				'type' => 'textarea',
				'args' => array(
					'label'       => 'Description',
					'rows'        => 8,
					'input_class' => 'widefat',
				),
			),
		),
	) );

	parallax_field_helpers()->fields->do_field_repeater( 'video_embeds', array(
		'group'  => 'media',
		'label'  => 'Videos',
		'fields' => array(
			'embed_code' => array(
				'type' => 'textarea',
				'args' => array(
					'label'       => 'Embed Code',
					'rows'        => 12,
					'input_class' => 'widefat',
				),
			),
			'description' => array(
				'type' => 'textarea',
				'args' => array(
					'label'       => 'Description',
					'rows'        => 8,
					'input_class' => 'widefat',
				),
			),
		),
	) );

	parallax_field_helpers()->fields->save->initialize_fields( 'media' );
}