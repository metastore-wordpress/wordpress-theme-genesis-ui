<?php

function field_document_storage() {
	$field = get_field( 'document_storage' );

	if ( ! $field ) {
		return false;
	}

	return $field;
}