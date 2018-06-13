<?php

function block_document_table_head() {
	$out = '<thead>';
	$out .= '<tr>';
	$out .= '<th>' . esc_html__( 'Название', 'wp-ext-document' ) . '</th>';
	$out .= '<th>' . esc_html__( 'Номер', 'wp-ext-document' ) . '</th>';
	$out .= '<th>' . esc_html__( 'Дата', 'wp-ext-document' ) . '</th>';
	$out .= '</tr>';
	$out .= '</thead>';

	echo $out;
}
