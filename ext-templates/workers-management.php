<?php

/**
 * Template Name:       Worker / Catalog / Management
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
remove_action( 'genesis_loop', 'genesis_do_loop' );
remove_action( 'genesis_after_endwhile', 'genesis_posts_nav' );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

// Add filters.
add_filter( 'body_class', 'ext_body_class' );
function ext_body_class( $classes ) {
	$classes[] = 'wp-ext-worker';

	return $classes;
}

// Add actions.
add_action( 'genesis_loop', 'worker_loop' );

// Template parts.
get_template_part( 'ext-functions/block/archive', 'description' );
get_template_part( 'ext-functions/block/worker', 'cover' );
get_template_part( 'ext-functions/block/worker', 'position' );
get_template_part( 'ext-functions/block/worker', 'contacts' );

function worker_loop() {

	/**
	 * Global variables.
	 */
	global $wp_query;

	/**
	 * Options.
	 */
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$args = [
		'post_type'      => 'worker',
		'post_status'    => 'publish',
		'posts_per_page' => 10,
		'paged'          => $paged,
		'tax_query'      => [
			[
				'taxonomy' => 'worker_type',
				'field'    => 'slug',
				'terms'    => 'management',
				'operator' => 'IN',
			],
			[
				'taxonomy' => 'worker_meta',
				'field'    => 'slug',
				'terms'    => 'archive',
				'operator' => 'NOT IN',
			]
		],
	];

	/**
	 * Rendering data.
	 */
	block_archive_description( 'Управление', 'worker' );

	$wp_query = new WP_Query( $args );

	if ( $wp_query->have_posts() ) {

		while ( $wp_query->have_posts() ) {
			$wp_query->the_post();

			do_action( 'genesis_before_entry' );

			genesis_markup( [
				'open'    => '<article %s>',
				'context' => 'entry',
			] );

			echo '<div class="worker-content"><div class="worker-grid"><div>';

			block_worker_cover();

			echo '</div><div>';

			do_action( 'genesis_entry_header' );

			block_worker_position();
			block_worker_contacts();

			echo '</div></div></div>';

			genesis_markup( [
				'close'   => '</article>',
				'context' => 'entry',
			] );

			do_action( 'genesis_after_entry' );
		}

		genesis_posts_nav();
	}

	/**
	 * Reset query.
	 */
	wp_reset_query();
}

genesis();
