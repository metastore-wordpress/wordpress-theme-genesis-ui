<?php

function field_patent_date_priority() {
	$field = esc_html( get_field( 'patent_date_priority' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}