<?php

get_template_part( 'ext-functions/field/news', 'source-url' );

function block_news_source_url() {
	$url = field_news_source_url();
	$out = '';

	if ( $url ) {
		$out .= '<cite class="news-source-url">' . $url . '</cite>';
	}

	echo $out;
}
