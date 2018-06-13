<?php

get_template_part( 'ext-functions/field/document', 'cover' );

function block_document_cover() {
	$image = field_document_cover();

	$out = '<div class="document-cover">' . $image . '</div>';

	echo $out;
}
