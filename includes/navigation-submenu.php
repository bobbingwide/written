<?php
/**
 * Overrides the `core/navigation-submenu` block.
 *
 * @param array $attributes The block attributes.
 * @param array $content The saved content.
 * @param array $block The parsed block.
 *
 * @return string Returns the post content with the legacy widget added.
 */
function written_render_block_core_navigation_submenu( $attributes, $content, $block ) {
	$attributes = written_fiddle_nav_atts($attributes);
	$html = gutenberg_render_block_core_navigation_submenu($attributes, $content, $block);
	return $html;
}
