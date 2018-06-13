<?php

get_template_part( 'ext-functions/field/service', 'cover' );

function block_service_cover() {
	$image = field_service_cover();

	$out = '<div class="service-cover">' . $image . '</div>';

	echo $out;
}