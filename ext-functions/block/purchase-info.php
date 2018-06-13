<?php

get_template_part( 'ext-functions/field/purchase', 'eis-number' );
get_template_part( 'ext-functions/field/purchase', 'method' );
get_template_part( 'ext-functions/field/purchase', 'status' );
get_template_part( 'ext-functions/field/purchase', 'lot-id' );
get_template_part( 'ext-functions/field/purchase', 'description' );

function block_purchase_info() {
	$eis_number  = field_purchase_eis_number();
	$eis_url     = field_purchase_eis_url();
	$method      = field_purchase_method();
	$lot_id      = field_purchase_lot_id();
	$status      = field_purchase_status();
	$description = field_purchase_description();
	$out         = '';

	$out .= '<section class="purchase-info">';
	$out .= '<h4>' . esc_html__( 'Общие сведения о закупке', 'wp-ext-purchase' ) . '</h4>';
	$out .= '<div class="purchase-info-content">';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Номер извещения', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $eis_number . ' ' . $eis_url . '</div></div>';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Дата размещения', 'wp-ext-purchase' ) . '</div><div class="field-value">' . get_the_date() . '</div></div>';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Способ закупки', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $method . '</div></div>';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Описание закупки', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $description . '</div></div>';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Лоты', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $lot_id . '</div></div>';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Статус закупки', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $status . '</div></div>';
	$out .= '</div>';
	$out .= '</section>';

	echo $out;
}
