<?php

get_template_part( 'ext-functions/field/patent', 'possessor' );

function patent_convert_tel( $field ) {
	$number = preg_replace( '#[^0-9\+]#', '', $field );

	return $number;
}

function block_patent_possessor() {
	$possessor = field_patent_possessor();
	$out       = '';

	if ( $possessor ) {
		$out .= '<section class="patent-possessor">';
		$out .= '<h4>' . esc_html__( 'Патентообладатели', 'wp-ext-patent' ) . '</h4>';
		$out .= '<div class="patent-possessor-content">';

		foreach ( $possessor as $item ) {
			$name    = esc_html( $item['name'] );
			$email   = esc_html( $item['email'] );
			$phone   = esc_html( $item['phone'] );
			$fax     = esc_html( $item['fax'] );
			$country = esc_html( $item['country'] );

			$out_email = '<a href="mailto:' . $email . '" rel="nofollow"><i class="fas fa-envelope"></i><span>' . $email . '</span></a>';
			$out_phone = '<a href="tel:' . patent_convert_tel( $phone ) . '" rel="nofollow"><i class="fas fa-phone"></i><span>' . $phone . '</span></a>';
			$out_fax   = '<a href="fax:' . patent_convert_tel( $fax ) . '" rel="nofollow"><i class="fas fa-fax"></i><span>' . $fax . '</span></a>';

			$out .= '<div class="fields">';

			if ( $name ) {
				$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Название', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $name . ' (' . $country . ')' . '</div></div>';
			}

			if ( $email ) {
				$out .= '<div class="field"><div class="field-label">' . esc_html__( 'E-mail', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $out_email . '</div></div>';
			}

			if ( $phone ) {
				$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Телефон', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $out_phone . '</div></div>';
			}

			if ( $fax ) {
				$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Факс', 'wp-ext-purchase' ) . '</div><div class="field-value">' . $out_fax . '</div></div>';
			}

			$out .= '</div>';
		}

		$out .= '</div>';
		$out .= '</section>';
	}

	echo $out;
}