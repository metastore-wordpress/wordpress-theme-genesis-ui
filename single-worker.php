<?php

/**
 * Template Name:       Worker / Single
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

// Add actions.
add_action( 'genesis_before_entry_content', 'block_worker_position', 0 );
add_action( 'genesis_before_entry_content', 'worker_markup_open', 0 );
add_action( 'genesis_before_entry_content', 'block_worker_cover', 0 );
add_action( 'genesis_before_entry_content', 'block_worker_contacts', 0 );
add_action( 'genesis_before_entry_content', 'worker_markup_close', 0 );

// Template parts.
get_template_part( 'ext-functions/block/worker', 'cover' );
get_template_part( 'ext-functions/block/worker', 'position' );
get_template_part( 'ext-functions/block/worker', 'contacts' );

function worker_markup_open() {
	echo '<div class="worker-content" itemprop="text"><div class="worker-grid">';
}

function worker_markup_close() {
	echo '</div></div>';
}

genesis();
