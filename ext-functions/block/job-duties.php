<?php

get_template_part( 'ext-functions/field/job', 'duties' );

function block_job_duties() {
	$duties = field_job_duties();
	$out    = '';

	if ( $duties ) {
		$out .= '<section class="job-duties">';
		$out .= '<h4>' . esc_html__( 'Обязанности', 'wp-ext-job' ) . '</h4>';
		$out .= '<div class="entry-content job-duties-content">' . $duties . '</div>';
		$out .= '</section>';
	}

	echo $out;
}
