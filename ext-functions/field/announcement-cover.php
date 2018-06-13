<?php

function field_announcement_cover() {
	$field = get_field( 'announcement_cover' );

	if ( $field ) {
		$cover = '';
		$style = 'background-image: url(' . $field['url'] . ')';
	} else {
		$cover = '<i class="fas fa-bullhorn"></i>';
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