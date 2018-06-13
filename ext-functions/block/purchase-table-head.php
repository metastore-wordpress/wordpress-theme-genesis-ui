<?php

function block_purchase_table_head() {
	$out = '<thead>';
	$out .= '<tr>';
	$out .= '<th>' . esc_html__( '#', 'wp-ext-purchase' ) . '</th>';
	$out .= '<th>' . esc_html__( 'Извещение', 'wp-ext-purchase' ) . '</th>';
	$out .= '<th>' . esc_html__( 'Номер лота', 'wp-ext-purchase' ) . '</th>';
	$out .= '<th>' . esc_html__( 'Дата', 'wp-ext-purchase' ) . '</th>';
	$out .= '<th>' . esc_html__( 'Статус', 'wp-ext-purchase' ) . '</th>';
	$out .= '</tr>';
	$out .= '</thead>';

	echo $out;
}
