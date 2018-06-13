<?php

get_template_part( 'ext-functions/field/purchase', 'customer-name' );
get_template_part( 'ext-functions/field/purchase', 'customer-itn' );
get_template_part( 'ext-functions/field/purchase', 'customer-iec' );
get_template_part( 'ext-functions/field/purchase', 'customer-psrn' );
get_template_part( 'ext-functions/field/purchase', 'customer-location' );
get_template_part( 'ext-functions/field/purchase', 'customer-mailing-address' );

function block_purchase_customer() {
	$organization    = field_purchase_customer_name();
	$itn             = field_purchase_customer_itn();
	$iec             = field_purchase_customer_iec();
	$psrn            = field_purchase_customer_psrn();
	$location        = field_purchase_customer_location();
	$mailing_address = field_purchase_customer_mailing_address();
	$out             = '';

	$out .= '<section class="purchase-customer">';
	$out .= '<h4>' . esc_html__( 'Заказчик', 'wp-ext-purchase' ) . '</h4>';
	$out .= '<div class="purchase-customer-content">';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Организация', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $organization . '</div></div>';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'ИНН / КПП', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $itn . ' / ' . $iec . '</div></div>';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'ОГРН', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $psrn . '</div></div>';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Адрес места нахождения', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $location . '</div></div>';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Почтовый адрес', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $mailing_address . '</div></div>';
	$out .= '</div>';
	$out .= '</section>';

	echo $out;
}
