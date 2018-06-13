<?php

function field_patent_number() {
	$field = esc_html( get_field( 'patent_number' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}