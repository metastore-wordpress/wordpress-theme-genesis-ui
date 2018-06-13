<?php

get_template_part( 'ext-functions/field/worker', 'phone' );
get_template_part( 'ext-functions/field/worker', 'phone-mobile' );
get_template_part( 'ext-functions/field/worker', 'fax' );
get_template_part( 'ext-functions/field/worker', 'email' );

function block_worker_contacts() {
	$phone        = field_worker_phone();
	$phone_mobile = field_worker_phone_mobile();
	$fax          = field_worker_fax();
	$email        = field_worker_email();

	$out = '<section class="worker-contacts">';
	$out .= '<h4>' . esc_html__( 'Контакты', 'wp-ext-worker' ) . '</h4>';
	$out .= '<div class="worker-contacts-content">';

	if ( $phone ) {
		$out .= '<div class="worker-phone">' . $phone . '</div>';
	}

	if ( $phone_mobile ) {
		$out .= '<div class="worker-phone-mobile">' . $phone_mobile . '</div>';
	}

	if ( $fax ) {
		$out .= '<div class="worker-fax">' . $fax . '</div>';
	}

	if ( $email ) {
		$out .= '<div class="worker-email">' . $email . '</div>';
	}

	$out .= '</div>';
	$out .= '</section>';

	echo $out;
}
