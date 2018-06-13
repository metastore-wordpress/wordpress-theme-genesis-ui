<?php

get_template_part( 'ext-functions/field/project', 'cover' );

function block_project_cover() {
	$image = field_project_cover();

	$out = '<div class="project-cover">' . $image . '</div>';

	echo $out;
}
