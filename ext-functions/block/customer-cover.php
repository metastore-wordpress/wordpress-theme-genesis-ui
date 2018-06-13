<?php

get_template_part( 'ext-functions/field/customer', 'cover' );

function block_customer_cover() {
	$image = field_customer_cover();

	$out = '<div class="customer-cover">' . $image . '</div>';

	echo $out;
}
