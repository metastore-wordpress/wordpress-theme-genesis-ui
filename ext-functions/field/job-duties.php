<?php

function field_job_duties() {
	$field = wp_kses_post( get_field( 'job_duties' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}