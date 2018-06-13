<?php

function field_purchase_description() {
	$field = esc_html( get_field( 'purchase_description' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}