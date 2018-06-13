<?php

get_template_part( 'ext-functions/field/worker', 'position' );
get_template_part( 'ext-functions/field/worker', 'department' );

function block_worker_position() {
	$position   = field_worker_position();
	$department = field_worker_department();

	$out = '<div class="worker-position">' . $position . '</div>';

	if ( $department ) {
		$out .= '<div class="worker-department">' . $department . '</div>';
	}

	echo $out;
}
