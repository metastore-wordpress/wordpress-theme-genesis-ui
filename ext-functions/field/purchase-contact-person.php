<?php

function field_purchase_contact_person() {
	$field = esc_html( get_field( 'purchase_contact_person' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}