<?php

/**
 * Template Name:       Job / Single
 * Template Post Type:  page
 *
 * @package             WordPress
 * @since               1.0.0
 * @link                https://metastore.pro/
 * @author              Kitsune Solar <kitsune.solar@gmail.com>
 * @copyright           Copyright (c) 2018, Kitsune Solar
 * @license             https://www.gnu.org/licenses/gpl-3.0.txt GNU Public License
 */

// Add actions.
add_action( 'genesis_before_entry_content', 'job_markup_open', 0 );
add_action( 'genesis_before_entry_content', 'block_job_meta', 0 );
add_action( 'genesis_before_entry_content', 'block_job_duties', 0 );
add_action( 'genesis_before_entry_content', 'block_job_skills', 0 );
add_action( 'genesis_before_entry_content', 'block_job_conditions', 0 );
add_action( 'genesis_before_entry_content', 'job_markup_close', 0 );

// Template parts.
get_template_part( 'ext-functions/block/job', 'meta' );
get_template_part( 'ext-functions/block/job', 'duties' );
get_template_part( 'ext-functions/block/job', 'skills' );
get_template_part( 'ext-functions/block/job', 'conditions' );

function job_markup_open() {
	echo '<div class="job-content" itemprop="text">';
}

function job_markup_close() {
	echo '</div>';
}

genesis();
