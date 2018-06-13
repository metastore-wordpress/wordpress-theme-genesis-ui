<?php

function field_worker_fax() {
	$field = get_field( 'worker_fax' );
	$out   = '';

	if ( ! $field ) {
		return false;
	}

	$out .= '<ul>';

	foreach ( $field as $item ) {
		$number = preg_replace( '#[^0-9\+]#', '', esc_html( $item['number'] ) );
		$out    .= '<li><a href="fax:' . $number . '" rel="nofollow"><i class="fas fa-fax fa-fw"></i><span>' . esc_html( $item['number'] ) . '</span></a></li>';
	}

	$out .= '</ul>';

	return $out;
}