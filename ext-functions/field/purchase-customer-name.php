<?php

function field_purchase_customer_name() {
	$field = esc_html( get_field( 'purchase_customer_name' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}