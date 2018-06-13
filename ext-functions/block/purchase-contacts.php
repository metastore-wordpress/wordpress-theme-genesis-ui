<?php

get_template_part( 'ext-functions/field/purchase', 'contact-organization' );
get_template_part( 'ext-functions/field/purchase', 'contact-person' );
get_template_part( 'ext-functions/field/purchase', 'contact-email' );
get_template_part( 'ext-functions/field/purchase', 'contact-phone' );
get_template_part( 'ext-functions/field/purchase', 'contact-fax' );

function block_purchase_contacts() {
	$organization = field_purchase_contact_organization();
	$person       = field_purchase_contact_person();
	$email        = field_purchase_contact_email();
	$phone        = field_purchase_contact_phone();
	$fax          = field_purchase_contact_fax();
	$out          = '';

	$out .= '<section class="purchase-contacts">';
	$out .= '<h4>' . esc_html__( 'Контактное лицо', 'wp-ext-purchase' ) . '</h4>';
	$out .= '<div class="purchase-contacts-content">';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Организация', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $organization . '</div></div>';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Контактное лицо', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $person . '</div></div>';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Электронная почта', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $email . '</div></div>';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Телефон', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $phone . '</div></div>';
	$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Факс', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $fax . '</div></div>';
	$out .= '</div>';
	$out .= '</section>';

	echo $out;
}
