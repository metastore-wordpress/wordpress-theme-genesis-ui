<?php

get_template_part( 'ext-functions/field/purchase', 'eis-number' );
get_template_part( 'ext-functions/field/purchase', 'lot-id' );
get_template_part( 'ext-functions/field/purchase', 'status' );

function block_purchase_table_row() {
	$eis_number = field_purchase_eis_number();
	$eis_url    = field_purchase_eis_url();
	$lot_id     = field_purchase_lot_id();
	$status     = field_purchase_status();

	$out = '<tr>';
	$out .= '<td>' . $eis_url . '</td>';
	$out .= '<td><a href="' . esc_url( get_permalink() ) . '">' . $eis_number . '</a></td>';
	$out .= '<td>' . $lot_id . '</td>';
	$out .= '<td>' . get_the_date() . '</td>';
	$out .= '<td>' . $status . '</td>';
	$out .= '</tr>';

	echo $out;
}
