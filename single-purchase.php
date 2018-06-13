<?php

/**
 * Template Name:       Purchase / Single
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
add_action( 'genesis_before_entry_content', 'purchase_markup_open', 0 );
add_action( 'genesis_before_entry_content', 'block_purchase_info', 0 );
add_action( 'genesis_before_entry_content', 'block_purchase_customer', 0 );
add_action( 'genesis_before_entry_content', 'block_purchase_contacts', 0 );
add_action( 'genesis_before_entry_content', 'block_purchase_storage', 0 );
add_action( 'genesis_before_entry_content', 'purchase_markup_close', 0 );

// Template parts.
get_template_part( 'ext-functions/block/purchase', 'info' );
get_template_part( 'ext-functions/block/purchase', 'customer' );
get_template_part( 'ext-functions/block/purchase', 'contacts' );
get_template_part( 'ext-functions/block/purchase', 'storage' );

function purchase_markup_open() {
	echo '<div class="purchase-content" itemprop="text">';
}

function purchase_markup_close() {
	echo '</div>';
}

genesis();
