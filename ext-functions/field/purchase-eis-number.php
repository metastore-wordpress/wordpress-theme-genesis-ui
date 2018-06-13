<?php

function field_purchase_eis_number() {
	$field = esc_html( get_field( 'purchase_eis_number' ) );

	if ( ! $field ) {
		return false;
	}

	return $field;
}

function field_purchase_eis_url() {
	$eis_number = field_purchase_eis_number();

	if ( ! $eis_number ) {
		return false;
	}

	$eis_url = esc_url( 'http://zakupki.gov.ru/223/purchase/public/purchase/info/common-info.html?regNumber=' . $eis_number );
	$out     = '<a href="' . $eis_url . '" rel="nofollow" target="_blank"><i class="fas fa-external-link-alt"></i></a>';

	return $out;
}