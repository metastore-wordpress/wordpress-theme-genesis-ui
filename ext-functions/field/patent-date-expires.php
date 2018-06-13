<?php

function field_patent_date_expires() {
	$field = esc_html( get_field( 'patent_date_expires' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}