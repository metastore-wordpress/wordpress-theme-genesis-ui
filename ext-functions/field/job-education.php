<?php

function field_job_education() {
	$field = esc_html( get_field( 'job_education' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}