<?php

function field_worker_email() {
	$field = get_field( 'worker_email' );
	$out   = '';

	if ( ! $field ) {
		return false;
	}

	$out .= '<ul>';

	foreach ( $field as $item ) {
		$out .= '<li><a href="mailto:' . esc_html( $item['address'] ) . '" rel="nofollow"><i class="fas fa-envelope fa-fw"></i><span>' . esc_html( $item['address'] ) . '</span></a></li>';
	}

	$out .= '</ul>';

	return $out;
}