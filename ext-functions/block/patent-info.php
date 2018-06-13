<?php

get_template_part( 'ext-functions/field/patent', 'number' );
get_template_part( 'ext-functions/field/patent', 'type' );
get_template_part( 'ext-functions/field/patent', 'date-priority' );
get_template_part( 'ext-functions/field/patent', 'date-registration' );
get_template_part( 'ext-functions/field/patent', 'date-expires' );

function block_patent_info() {
	$number       = field_patent_number();
	$type         = field_patent_type();
	$priority     = field_patent_date_priority();
	$registration = field_patent_date_registration();
	$expires      = field_patent_date_expires();
	$out          = '';

	$out .= '<section class="patent-info">';
	$out .= '<h4>' . esc_html__( 'Общие сведения о патенте', 'wp-ext-patent' ) . '</h4>';
	$out .= '<div class="patent-info-content">';

	if ( $number ) {
		$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Номер патента', 'wp-ext-patent' ) . '</div><div class="field-value">' . $number . '</div></div>';
	}

	if ( $type ) {
		$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Тип патента', 'wp-ext-patent' ) . '</div><div class="field-value">' . $type . '</div></div>';
	}

	if ( $priority ) {
		$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Приоритет', 'wp-ext-patent' ) . '</div><div class="field-value">' . $priority . '</div></div>';
	}

	if ( $registration ) {
		$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Регистрация', 'wp-ext-patent' ) . '</div><div class="field-value">' . $registration . '</div></div>';
	}

	if ( $expires ) {
		$out .= '<div class="field"><div class="field-label">' . esc_html__( 'Истекает', 'wp-ext-patent' ) . '</div><div class="field-value">' . $expires . '</div></div>';
	}

	$out .= '</div>';
	$out .= '</section>';

	echo $out;
}
