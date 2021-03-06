<?php

/**
 * Template Name:       Project / Single
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
add_action( 'genesis_after_entry_content', 'project_markup_open', 0 );
add_action( 'genesis_after_entry_content', 'block_project_storage', 0 );
add_action( 'genesis_after_entry_content', 'project_markup_close', 0 );

// Template parts.
get_template_part( 'ext-functions/block/project', 'storage' );

function project_markup_open() {
	echo '<div class="project-content" itemprop="text">';
}

function project_markup_close() {
	echo '</div>';
}

genesis();