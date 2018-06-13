<?php

function field_purchase_contact_phone() {
	$field  = esc_html( get_field( 'purchase_contact_phone' ) );
	$number = preg_replace( '#[^0-9\+]#', '', $field );

	if ( ! $field ) {
		return false;
	}

	$out = '<a href="tel:' . $number . '" rel="nofollow"><i class="fas fa-phone"></i><span>' . $field . '</span></a>';

	return $out;
}