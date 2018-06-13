<?php

get_template_part( 'ext-functions/field/job', 'skills' );

function block_job_skills() {
	$skills = field_job_skills();
	$out    = '';

	if ( $skills ) {
		$out .= '<section class="job-skills">';
		$out .= '<h4>' . esc_html__( 'Требования', 'wp-ext-job' ) . '</h4>';
		$out .= '<div class="entry-content job-skills-content">' . $skills . '</div>';
		$out .= '</section>';
	}

	echo $out;
}
