<?php

function block_archive_description( $title, $id ) {
	$out = '<div class="archive-description ' . $id . '-archive-description"><h1 class="archive-title">';
	$out .= esc_html__( $title, 'wp-ext-' . $id );
	$out .= '</h1></div>';

	echo $out;
}