<?php

function field_job_contacts() {
	$field = wp_kses_post( get_field( 'job_contacts' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}