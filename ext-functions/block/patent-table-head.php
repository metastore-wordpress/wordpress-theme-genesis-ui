<?php

function block_patent_table_head() {
	$out = '<thead>';
	$out .= '<tr>';
	$out .= '<th>' . esc_html__( '#', 'wp-ext-patent' ) . '</th>';
	$out .= '<th>' . esc_html__( 'Название', 'wp-ext-patent' ) . '</th>';
	$out .= '<th>' . esc_html__( 'Тип', 'wp-ext-patent' ) . '</th>';
	$out .= '</tr>';
	$out .= '</thead>';

	echo $out;
}
