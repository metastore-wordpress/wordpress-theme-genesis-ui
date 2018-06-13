<?php

function field_document_gallery() {
	$field = get_field( 'document_gallery' );

	if ( ! $field ) {
		return false;
	}

	return $field;
}