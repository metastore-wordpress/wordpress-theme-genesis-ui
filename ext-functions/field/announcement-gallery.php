<?php

function field_announcement_gallery() {
	$field = get_field( 'announcement_gallery' );

	if ( ! $field ) {
		return false;
	}

	return $field;
}