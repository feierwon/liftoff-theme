<?php
/**
 * Trajectory theme functions.
 *
 * Minimal — FSE themes handle most configuration via theme.json.
 *
 * @package Trajectory
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup.
 *
 * @return void
 */
function trajectory_setup(): void {
	// Add editor styles.
	add_editor_style( 'assets/css/editor-styles.css' );

	// Register block pattern categories.
	register_block_pattern_category( 'trajectory', array(
		'label' => __( 'Trajectory Patterns', 'trajectory' ),
	) );
}
add_action( 'after_setup_theme', 'trajectory_setup' );

/**
 * Enqueue front-end styles.
 *
 * @return void
 */
function trajectory_enqueue(): void {
	wp_enqueue_style(
		'trajectory-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'trajectory_enqueue' );

/**
 * Limit the block inserter to a curated set of blocks.
 *
 * Reduces decision fatigue for volunteer content editors.
 *
 * @param array $allowed_blocks List of allowed block types.
 * @return array Filtered list.
 */
function trajectory_allowed_blocks( array $allowed_blocks ): array {
	return array(
		'core/paragraph',
		'core/heading',
		'core/image',
		'core/gallery',
		'core/list',
		'core/list-item',
		'core/quote',
		'core/separator',
		'core/spacer',
		'core/buttons',
		'core/button',
		'core/columns',
		'core/column',
		'core/group',
		'core/cover',
		'core/media-text',
		'core/table',
		'core/embed',
		'core/video',
		'core/audio',
		'core/file',
		'core/shortcode',
		'core/html',
		'core/pullquote',
		'core/site-title',
		'core/site-logo',
		'core/navigation',
		'core/page-list',
		'core/post-title',
		'core/post-content',
		'core/post-date',
		'core/post-excerpt',
		'core/post-featured-image',
		'core/query',
		'core/query-pagination',
		'core/query-pagination-next',
		'core/query-pagination-previous',
		'core/query-no-results',
		'core/post-template',
		'core/template-part',
		'core/pattern',
		'core/search',
		'core/social-links',
		'core/social-link',
	);
}
add_filter( 'allowed_block_types_all', 'trajectory_allowed_blocks' );
