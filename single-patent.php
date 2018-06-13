<?php

/**
 * Template Name:       Patent / Single
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
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_after_entry', 'genesis_do_author_box_single', 8 );

// Add actions.
add_action( 'genesis_before_entry_content', 'patent_markup_open', 0 );
add_action( 'genesis_before_entry_content', 'block_patent_info', 0 );
add_action( 'genesis_before_entry_content', 'block_patent_possessor', 0 );
add_action( 'genesis_before_entry_content', 'block_patent_author', 0 );
add_action( 'genesis_before_entry_content', 'patent_markup_close', 0 );

// Template parts.
get_template_part( 'ext-functions/block/patent', 'info' );
get_template_part( 'ext-functions/block/patent', 'possessor' );
get_template_part( 'ext-functions/block/patent', 'author' );

function patent_markup_open() {
	echo '<div class="patent-content" itemprop="text">';
}

function patent_markup_close() {
	echo '</div>';
}

genesis();
