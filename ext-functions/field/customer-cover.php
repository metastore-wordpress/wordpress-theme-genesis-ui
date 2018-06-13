<?php

function field_customer_cover() {
	$field = get_field( 'customer_cover' );

	if ( $field ) {
		$cover = '';
		$style = 'background-image: url(' . $field['url'] . ')';
	} else {
		$cover = '<i class="far fa-handshake"></i>';
		$style = '';
	}

	if ( is_single() ) {
		$url = '';
	} else {
		$url = 'href="' . esc_url( get_permalink() ) . '"';
	}

	$out = '<a style="' . $style . '" title="' . esc_attr( get_the_title() ) . '" ' . $url . '>' . $cover . '</a>';

	return $out;
}