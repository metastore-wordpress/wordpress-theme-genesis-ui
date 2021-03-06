<?php

/**
 * Template Name:       Purchase / Catalog / Archive
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

// Add filters.
add_filter( 'body_class', 'ext_body_class' );
function ext_body_class( $classes ) {
	$classes[] = 'wp-ext-purchase';

	return $classes;
}

// Add actions.
add_action( 'genesis_loop', 'purchase_archive_loop' );

// Template parts.
get_template_part( 'ext-functions/block/archive', 'description' );
get_template_part( 'ext-functions/block/purchase', 'table-head' );
get_template_part( 'ext-functions/block/purchase', 'table-row' );

function purchase_archive_loop() {

	/**
	 * Global variables.
	 */
	global $wp_query;

	/**
	 * Options.
	 */
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$args = [
		'post_type'      => 'purchase',
		'post_status'    => 'publish',
		'posts_per_page' => 10,
		'paged'          => $paged,
		'tax_query'      => [
			[
				'taxonomy' => 'purchase_meta',
				'field'    => 'slug',
				'terms'    => 'archive',
				'operator' => 'IN',
			]
		],
	];

	/**
	 * Rendering data.
	 */
	block_archive_description( 'Закупки - Архив', 'purchase' );

	$wp_query = new WP_Query( $args );

	if ( $wp_query->have_posts() ) {
		echo '<table class="purchases">';

		block_purchase_table_head();

		echo '<tbody>';

		while ( $wp_query->have_posts() ) {
			$wp_query->the_post();

			block_purchase_table_row();
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
