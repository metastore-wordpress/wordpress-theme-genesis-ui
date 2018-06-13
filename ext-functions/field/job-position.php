<?php

function field_job_position() {
	$field = esc_html( get_field( 'job_position' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}