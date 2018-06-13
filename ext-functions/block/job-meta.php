<?php

get_template_part( 'ext-functions/field/job', 'position' );
get_template_part( 'ext-functions/field/job', 'department' );
get_template_part( 'ext-functions/field/job', 'education' );
get_template_part( 'ext-functions/field/job', 'contacts' );

function block_job_meta() {
	$msg_none = '<span class="msg-none">' . esc_html__( 'Не указано', 'wp-ext-job' ) . '</span>';

	$position   = field_job_position() ?? '' ?: $msg_none;
	$department = field_job_department() ?? '' ?: $msg_none;
	$education  = field_job_education() ?? '' ?: $msg_none;
	$contacts   = field_job_contacts();

	$out = '<div class="job-grid">';

	if ( $position && $department && $education ) {
		$out .= '<section class="job-meta">';
		$out .= '<h4>' . esc_html__( 'Краткое описание', 'wp-ext-job' ) . '</h4>';
		$out .= '<div class="job-meta-content">';

		if ( $position ) {
			$out .= '<div><i class="far fa-address-card fa-fw"></i></div><div>' . $position . '</div>';
		}

		if ( $department ) {
			$out .= '<div><i class="fas fa-sitemap fa-fw"></i></div><div>' . $department . '</div>';
		}

		if ( $education ) {
			$out .= '<div><i class="fas fa-graduation-cap fa-fw"></i></div><div>' . $education . '</div>';
		}

		$out .= '</div>';
		$out .= '</section>';
	}

	if ( $contacts ) {
		$out .= '<section class="entry-content job-contacts">';
		$out .= '<h4>' . esc_html__( 'Контакты', 'wp-ext-job' ) . '</h4>';
		$out .= '<div class="job-contacts-content">' . $contacts . '</div>';
		$out .= '</section>';
	}

	$out .= '</div>';

	echo $out;
}
