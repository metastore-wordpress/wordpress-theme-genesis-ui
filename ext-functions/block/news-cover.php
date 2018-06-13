<?php

get_template_part( 'ext-functions/field/news', 'cover' );

function block_news_cover() {
	$image = field_news_cover();

	$out = '<div class="news-cover">' . $image . '</div>';

	echo $out;
}
