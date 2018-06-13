<?php

get_template_part( 'ext-functions/field/worker', 'cover' );

function block_worker_cover() {
	$image = field_worker_cover();
	$out   = '<div class="worker-cover">' . $image . '</div>';

	echo $out;
}