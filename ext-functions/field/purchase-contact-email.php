<?php

function field_purchase_contact_email() {
	$field = esc_html( get_field( 'purchase_contact_email' ) );

	if ( ! $field ) {
		return false;
	}

	$out = '<a href="mailto:' . $field . '" rel="nofollow"><i class="fas fa-envelope"></i><span>' . $field . '</span></a>';

	return $out;
}