<?php

function field_purchase_lot_id() {
	$field = esc_html( get_field( 'purchase_lot_id' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}