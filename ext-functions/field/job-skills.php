<?php

function field_job_skills() {
	$field = wp_kses_post( get_field( 'job_skills' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}