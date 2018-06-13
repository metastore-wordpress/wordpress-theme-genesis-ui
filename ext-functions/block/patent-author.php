<?php

get_template_part( 'ext-functions/field/patent', 'author' );

function block_patent_author() {
	$author = field_patent_author();
	$out    = '';

	if ( $author ) {
		$out .= '<section class="patent-author">';
		$out .= '<h4>' . esc_html__( 'Авторы', 'wp-ext-patent' ) . '</h4>';
		$out .= '<div class="patent-author-content">';

		foreach ( $author as $item ) {
			$name    = esc_html( $item['name'] );
			$email   = esc_html( $item['email'] );
			$phone   = esc_html( $item['phone'] );
			$fax     = esc_html( $item['fax'] );
			$country = esc_html( $item['country'] );

			$out .= '<div class="fields">';

			if ( $name ) {
				$out .= '<div class="field"><div class="field-label"><i class="fas fa-user-circle fa-fw"></i></div><div class="field-value">' . $name . ' (' . $country . ')' . '</div></div>';
			}

			if ( $email ) {
				$out .= '<div class="field"><div class="field-label"><i class="fas fa-at fa-fw"></i></div><div class="field-value">' . $email . '</div></div>';
			}

			if ( $phone ) {
				$out .= '<div class="field"><div class="field-label"><i class="fas fa-phone fa-fw"></i></div><div class="field-value">' . $phone . '</div></div>';
			}

			if ( $fax ) {
				$out .= '<div class="field"><div class="field-label"><i class="fas fa-fax fa-fw"></i></div><div class="field-value">' . $fax . '</div></div>';
			}

			$out .= '</div>';
		}

		$out .= '</div>';
		$out .= '</section>';
	}

	echo $out;
}