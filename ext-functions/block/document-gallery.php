<?php

get_template_part( 'ext-functions/field/document', 'gallery' );

function block_document_gallery() {
	$files = field_document_gallery();
	$size  = 'thumbnail';
	$out   = '';

	if ( $files ) {
		$out = '<section class="document-gallery">';
		$out .= '<h4>' . esc_html__( 'Галерея', 'wp-ext-document' ) . '</h4>';
		$out .= '<div class="document-gallery-content">';
		foreach ( $files as $file ) {
			$url     = $file['url'];
			$image   = wp_get_attachment_image( $file['ID'], $size );
			$caption = $file['caption'];

			$out .= '<div><a href="' . $url . '" data-fancybox="gallery" data-caption="' . $caption . '"><figure>' . $image . '</figure></a></div>';
		}
		$out .= '</div>';
		$out .= '</section>';
	}

	echo $out;
}
