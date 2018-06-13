<?php

function field_news_cover() {
	$field = get_field( 'news_cover' );

	if ( $field ) {
		$cover = '';
		$style = 'background-image: url(' . esc_url( $field['url'] ) . ')';
	} else {
		$cover = '<i class="far fa-image fa-7x"></i>';
		$style = '';
	}

	if ( is_single() ) {
		$url = '';
	} else {
		$url = 'href="' . esc_url( get_permalink() ) . '"';
	}

	$out = '<a style="' . $style . '" title="' . esc_html( get_the_title() ) . '" ' . $url . '>' . $cover . '</a>';

	return $out;
}