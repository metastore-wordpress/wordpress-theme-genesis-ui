<?php

function field_service_cover() {
	$field = esc_html( get_field( 'service_cover' ) );

	if ( $field ) {
		$cover = '<i class="' . $field . '"></i>';
	} else {
		$cover = '<i class="fas fa-check-circle"></i>';
	}

	if ( is_single() ) {
		$url = '';
	} else {
		$url = 'href="' . esc_url( get_permalink() ) . '"';
	}

	$out = '<a title="' . esc_html( get_the_title() ) . '" ' . $url . '>' . $cover . '</a>';

	return $out;
}