<?php

get_template_part( 'ext-functions/field/news', 'gallery' );

function block_news_gallery() {
	$files = field_news_gallery();
	$size  = 'thumbnail';
	$out   = '';

	if ( $files ) {
		$out = '<section class="news-gallery">';
		$out .= '<h4>' . esc_html__( 'Галерея', 'wp-ext-news' ) . '</h4>';
		$out .= '<div class="news-gallery-content">';
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
