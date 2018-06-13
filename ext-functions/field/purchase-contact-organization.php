<?php

function field_purchase_contact_organization() {
	$field = esc_html( get_field( 'purchase_contact_organization' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}