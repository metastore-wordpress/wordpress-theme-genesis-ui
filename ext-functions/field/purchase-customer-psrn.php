<?php

function field_purchase_customer_psrn() {
	$field = esc_html( get_field( 'purchase_customer_psrn' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}