<?php

function field_purchase_method() {
	$field = get_field( 'purchase_method' );

	if ( ! $field ) {
		return false;
	}

	$term = get_term( $field );
	$out  = '<ul>';
	$out  .= '<li>' . esc_html( $term->name ) . '</li>';
	$out  .= '</ul>';

	return $out;
}