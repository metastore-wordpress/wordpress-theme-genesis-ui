<?php

get_template_part( 'ext-functions/field/announcement', 'cover' );

function block_announcement_cover() {
	$image = field_announcement_cover();

	$out = '<div class="announcement-cover">' . $image . '</div>';

	echo $out;
}
