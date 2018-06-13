<?php

get_template_part( 'ext-functions/field/patent', 'number' );
get_template_part( 'ext-functions/field/patent', 'type' );

function block_patent_table_row() {
	$number = field_patent_number();
	$type   = field_patent_type();

	$out = '<tr>';
	$out .= '<td>' . $number . '</td>';
	$out .= '<td><a href="' . esc_url( get_permalink() ) . '">' . get_the_title() . '</a></td>';
	$out .= '<td>' . $type . '</td>';
	$out .= '</tr>';

	echo $out;
}
