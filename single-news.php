<?php

/**
 * Template Name:       News / Single
 * Template Post Type:  page
 *
 * @package             WordPress
 * @since               1.0.0
 * @link                https://metastore.pro/
 * @author              Kitsune Solar <kitsune.solar@gmail.com>
 * @copyright           Copyright (c) 2018, Kitsune Solar
 * @license             https://www.gnu.org/licenses/gpl-3.0.txt GNU Public License
 */

// Remove actions.
remove_action( 'genesis_after_entry', 'genesis_do_author_box_single', 8 );

// Add actions.
add_action( 'genesis_entry_header', 'block_news_cover', 0 );
add_action( 'genesis_after_entry_content', 'block_news_source_url', 0 );
add_action( 'genesis_after_entry', 'block_news_gallery', 0 );

// Template parts.
get_template_part( 'ext-functions/block/news', 'cover' );
get_template_part( 'ext-functions/block/news', 'source-url' );
get_template_part( 'ext-functions/block/news', 'gallery' );

genesis();
