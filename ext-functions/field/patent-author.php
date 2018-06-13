<?php

function field_patent_author() {
	$field = get_field( 'patent_author' );

	if ( ! $field ) {
		return false;
	}

	return $field;
}