<?php

function field_worker_phone() {
	$field = get_field( 'worker_phone' );
	$out   = '';

	if ( ! $field ) {
		return false;
	}

	$out .= '<ul>';

	foreach ( $field as $item ) {
		$number = preg_replace( '#[^0-9\+]#', '', esc_html( $item['number'] ) );
		$out    .= '<li><a href="tel:' . $number . '" rel="nofollow"><i class="fas fa-phone fa-fw"></i><span>' . esc_html( $item['number'] ) . '</span></a></li>';
	}

	$out .= '</ul>';

	return $out;
}