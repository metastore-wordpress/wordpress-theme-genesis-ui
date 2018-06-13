<?php

get_template_part( 'ext-functions/field/document', 'number' );
get_template_part( 'ext-functions/field/document', 'date' );

function block_document_table_row() {
	$title  = get_the_title();
	$number = field_document_number();
	$date   = field_document_date();

	$out = '<tr>';
	$out .= '<td><a href="' . esc_url( get_permalink() ) . '">' . $title . '</a></td>';
	$out .= '<td>' . $number . '</td>';
	$out .= '<td>' . $date . '</td>';
	$out .= '</tr>';

	echo $out;
}
