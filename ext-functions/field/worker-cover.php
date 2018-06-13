<?php

function field_worker_cover() {
	$field = get_field( 'worker_cover' );

	if ( $field ) {
		$cover = '';
		$style = 'background-image: url(' . esc_url( $field['url'] ) . ')';
	} else {
		$cover = '<i class="fas fa-user-circle"></i>';
		$style = '';
	}

	if ( is_archive() ) {
		$url = 'href="' . esc_url( get_permalink() ) . '"';
	} else {
		$url = '';
	}

	$out = '<a style="' . $style . '" title="' . esc_html( get_the_title() ) . '" ' . $url . '>' . $cover . '</a>';

	return $out;
}