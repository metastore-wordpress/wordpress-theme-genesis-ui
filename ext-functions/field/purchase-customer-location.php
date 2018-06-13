<?php

function field_purchase_customer_location() {
	$field = esc_html( get_field( 'purchase_customer_location' ) );

	if ( ! $field ) {
		return false;
	}

	$out = '<a href="' . esc_url( 'https://www.google.ru/maps/place/' . $field ) . '" rel="nofollow" target="_blank"><i class="fas fa-map-marker-alt"></i><span>' . $field . '</span></a>';

	return $out;
}