<?php

/**
 * Template Name:       Customer / Catalog
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

// Add actions.
add_action( 'genesis_loop', 'service_loop' );

// Template parts.
get_template_part( 'ext-functions/block/archive', 'description' );
get_template_part( 'ext-functions/block/service', 'cover' );

function service_loop() {

	/**
	 * Global variables.
	 */

	global $wp_query;

	/**
	 * Options.
	 */

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$args = [
		'post_type'      => 'service',
		'post_status'    => 'publish',
		'posts_per_page' => 10,
		'paged'          => $paged,
		'tax_query'      => [
			[
				'taxonomy' => 'service_meta',
				'field'    => 'slug',
				'terms'    => 'archive',
				'operator' => 'NOT IN',
			]
		],
	];

	/**
	 * Rendering data.
	 */

	block_archive_description( 'Услуги', 'service' );

	$wp_query = new WP_Query( $args );

	if ( $wp_query->have_posts() ) {
		echo '<div class="service-grid">';

		while ( $wp_query->have_posts() ) {
			$wp_query->the_post();

			do_action( 'genesis_before_entry' );

			genesis_markup( [
				'open'    => '<article %s>',
				'context' => 'entry',
			] );

			block_service_cover();

			do_action( 'genesis_entry_header' );

			do_action( 'genesis_before_entry_content' );

			printf( '<div %s>', genesis_attr( 'entry-content' ) );
			do_action( 'genesis_entry_content' );
			echo '</div>';

			do_action( 'genesis_after_entry_content' );

			do_action( 'genesis_entry_footer' );

			genesis_markup( [
				'close'   => '</article>',
				'context' => 'entry',
			] );

			do_action( 'genesis_after_entry' );
		}

		echo '</div>';

		genesis_posts_nav();
	}

	/**
	 * Reset query.
	 */

	wp_reset_query();
}

genesis();
