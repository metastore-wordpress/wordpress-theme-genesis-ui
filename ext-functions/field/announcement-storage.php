<?php

function field_announcement_storage() {
	$field = get_field( 'announcement_storage' );

	if ( ! $field ) {
		return false;
	}

	return $field;
}