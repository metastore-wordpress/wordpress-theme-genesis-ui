<?php

function field_job_conditions() {
	$field = wp_kses_post( get_field( 'job_conditions' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}