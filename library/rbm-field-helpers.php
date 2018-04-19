<?php
/**
 * RBM Field Helpers
 */

defined( 'ABSPATH' ) || die();

require_once( 'rbm-field-helpers/rbm-field-helpers.php' );

/**
 * Gets the Parallax Noise RBM Field Helpers instance.
 *
 * @since {{VERSION}}
 */
function parallax_field_helpers() {

	if ( ! class_exists( 'RBM_FieldHelpers' ) ) {
		return false;
	}

	static $field_helpers;

	if ( $field_helpers === null ) {

		$field_helpers = new RBM_FieldHelpers( array(
			'ID' => 'parallax',
		) );
	}

	return $field_helpers;
}

parallax_field_helpers();

/**
 * Gets a field description tip.
 *
 * @since {{VERSION}}
 *
 * @param string $description Description text.
 */
function parallax_fieldhelpers_get_field_tip( $description ) {

	ob_start();
	?>
    <div class="fieldhelpers-field-description fieldhelpers-field-tip">
        <span class="fieldhelpers-field-tip-toggle dashicons dashicons-editor-help" data-toggle-tip></span>
        <p class="fieldhelpers-field-tip-text">
			<?php echo $description; ?>
        </p>
    </div>
	<?php

	return ob_get_clean();
}