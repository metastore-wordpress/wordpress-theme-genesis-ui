<?php

function field_patent_type() {
	$field = get_field( 'patent_type' );

	if ( ! $field ) {
		return false;
	}

	$term = get_term( $field );
	$name = $term->name;
	$slug = $term->slug;

	switch ( $slug ) {
		case 'invention':
			$icon = '<i title="' . $name . '" class="fas fa-rocket"></i>';
			break;
		case 'utility_model':
			$icon = '<i title="' . $name . '" class="fas fa-cog"></i>';
			break;
		default:
			$icon = '';
	}

	if ( is_single() ) {
		$out = $name;
	} else {
		$out = $icon;
	}

	return $out;
}
