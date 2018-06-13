<?php

function field_purchase_customer_itn() {
	$field = esc_html( get_field( 'purchase_customer_itn' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}