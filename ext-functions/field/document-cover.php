<?php

function field_document_cover() {
	$field = get_field( 'document_cover' );

	if ( $field ) {
		$cover = '';
		$style = 'background-image: url(' . esc_url( $field['sizes']['medium'] ) . ')';
	} else {
		$cover = '<i class="fas fa-file-alt"></i>';
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