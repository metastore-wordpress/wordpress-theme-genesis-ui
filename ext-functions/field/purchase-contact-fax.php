<?php

function field_purchase_contact_fax() {
	$field  = esc_html( get_field( 'purchase_contact_fax' ) );
	$number = preg_replace( '#[^0-9\+]#', '', $field );

	if ( ! $field ) {
		return false;
	}

	$out = '<a href="fax:' . $number . '" rel="nofollow"><i class="fas fa-fax"></i><span>' . $field . '</span></a>';

	return $out;
}