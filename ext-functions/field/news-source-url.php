<?php

function field_news_source_url() {
	$field = esc_html( get_field( 'news_source_url' ) );

	if ( ! $field ) {
		return false;
	}

	$name = parse_url( $field, PHP_URL_HOST );
	$out  = '<a href="' . esc_url( $field ) . '" rel="nofollow">' . esc_html__( 'Источник', 'wp-ext-news' ) . ': ' . $name . '</a>';

	return $out;
}