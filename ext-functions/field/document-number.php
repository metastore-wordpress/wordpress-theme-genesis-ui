<?php

function field_document_number() {
	$field = esc_html( get_field( 'document_info_number' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}