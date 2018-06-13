<?php

/**
 * Template Name:       Customer / Single
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
add_action( 'genesis_entry_header', 'block_customer_cover', 99 );

// Template parts.
get_template_part( 'ext-functions/block/customer', 'cover' );

genesis();
