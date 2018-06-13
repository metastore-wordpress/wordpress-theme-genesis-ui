<?php

get_template_part( 'ext-functions/field/job', 'conditions' );

function block_job_conditions() {
	$conditions = field_job_conditions();
	$out        = '';

	if ( $conditions ) {
		$out .= '<section class="job-conditions">';
		$out .= '<h4>' . esc_html__( 'Условия', 'wp-ext-job' ) . '</h4>';
		$out .= '<div class="entry-content job-conditions-content">' . $conditions . '</div>';
		$out .= '</section>';
	}

	echo $out;
}
