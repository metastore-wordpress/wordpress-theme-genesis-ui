<?php

function field_job_department() {
	$field = esc_html( get_field( 'job_department' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}