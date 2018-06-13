<?php

function field_news_gallery() {
	$field = get_field( 'news_gallery' );

	if ( ! $field ) {
		return false;
	}

	return $field;
}