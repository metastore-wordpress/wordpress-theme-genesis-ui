<?php

function field_project_storage() {
	$field = get_field( 'project_storage' );

	if ( ! $field ) {
		return false;
	}

	return $field;
}