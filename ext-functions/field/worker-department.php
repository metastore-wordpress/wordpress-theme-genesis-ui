<?php

function field_worker_department() {
	$field = esc_html( get_field( 'worker_department' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}