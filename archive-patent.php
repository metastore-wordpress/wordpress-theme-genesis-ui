<?php

/**
 * Template Name:       Patent / Catalog
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

// Add actions.
add_action( 'genesis_loop', 'patent_loop' );

// Template parts.
get_template_part( 'ext-functions/block/archive', 'description' );
get_template_part( 'ext-functions/block/patent', 'table-head' );
get_template_part( 'ext-functions/block/patent', 'table-row' );

function patent_loop() {

	/**
	 * Global variables.
	 */

	global $wp_query;

	/**
	 * Options.
	 */

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$args = [
		'post_type'      => 'patent',
		'post_status'    => 'publish',
		'posts_per_page' => 10,
		'paged'          => $paged,
		'tax_query'      => [
			[
				'taxonomy' => 'patent_meta',
				'field'    => 'slug',
				'terms'    => 'archive',
				'operator' => 'NOT IN',
			]
		],
	];

	/**
	 * Rendering data.
	 */

	block_archive_description( 'Патенты', 'patent' );

	$wp_query = new WP_Query( $args );

	if ( $wp_query->have_posts() ) {
		echo '<table class="patents">';

		block_patent_table_head();

		echo '<tbody>';

		while ( $wp_query->have_posts() ) {
			$wp_query->the_post();

			block_patent_table_row();
		}

		echo '</tbody></table>';

		genesis_posts_nav();
	}

	/**
	 * Reset query.
	 */

	wp_reset_query();
}

genesis();
