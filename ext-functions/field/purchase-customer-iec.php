<?php

function field_purchase_customer_iec() {
	$field = esc_html( get_field( 'purchase_customer_iec' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}