<?php

/**
 * Template Name:       Announcement / Single
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
add_action( 'genesis_after_entry_content', 'announcement_markup_open', 0 );
add_action( 'genesis_after_entry_content', 'block_announcement_gallery', 0 );
add_action( 'genesis_after_entry_content', 'block_announcement_storage', 0 );
add_action( 'genesis_after_entry_content', 'announcement_markup_close', 0 );

// Template parts.
get_template_part( 'ext-functions/block/announcement', 'storage' );
get_template_part( 'ext-functions/block/announcement', 'gallery' );

function announcement_markup_open() {
	echo '<div class="announcement-content" itemprop="text">';
}

function announcement_markup_close() {
	echo '</div>';
}

genesis();