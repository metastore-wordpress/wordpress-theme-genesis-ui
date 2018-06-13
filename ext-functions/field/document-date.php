<?php

function field_document_date() {
	$field = esc_html( get_field( 'document_info_date' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}