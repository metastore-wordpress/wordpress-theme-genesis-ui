<?php

function field_purchase_storage() {
	$field = get_field( 'purchase_storage' );

	if ( ! $field ) {
		return false;
	}

	return $field;
}