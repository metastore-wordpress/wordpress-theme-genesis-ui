<?php

function field_patent_date_registration() {
	$field = esc_html( get_field( 'patent_date_registration' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}