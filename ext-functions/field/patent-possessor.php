<?php

function field_patent_possessor() {
	$field = get_field( 'patent_possessor' );

	if ( ! $field ) {
		return false;
	}

	return $field;
}