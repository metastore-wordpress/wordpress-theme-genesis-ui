<?php

function field_worker_position() {
	$field = esc_html( get_field( 'worker_position' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}