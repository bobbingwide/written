<?php

/**
 * Overrides core/navigation-link
 *
 * @param $attributes
 * @param $content
 * @param $block
 * @return string
 */
function written_render_block_core_navigation_link($attributes, $content, $block)
{
    $attributes = written_fiddle_nav_atts($attributes);
    $html = gutenberg_render_block_core_navigation_link($attributes, $content, $block);
    return $html;
}

/**
 * Fiddles navigation-link attributes to get the required CSS classes.
 *
 * This is much simpler than the logic in `_wp_menu_item_classes_by_context( $menu_items )`.
 *
 * @TODO But, we also need to set the other classes such as current-menu-ancestor
 * which probably means we have to do this in core/navigation rather than core/navigation-link
 *
 * And we should cater for the 404 page being displayed when the menu item didn't exist.
 * @TODO Test what happens when the menu item becomes invalid.
 *
 * @param $attributes
 * @return mixed
 */
function written_fiddle_nav_atts($attributes)
{
    if (isset($attributes['url'])) {
        $attributes['url'] = str_replace('https://s.b/hm', site_url(), $attributes['url']);
        $request_uri = $_SERVER["REQUEST_URI"];
        $request_uri_path = parse_url($request_uri, PHP_URL_PATH);
        $url_path = parse_url($attributes['url'], PHP_URL_PATH);
		$site_url = parse_url(site_url(), PHP_URL_PATH);
        $site_url = ( $site_url ) ? trailingslashit( $site_url) : '/';

        // We need to avoid the home page: home_url() or site_url()
        if ($url_path === $site_url) {
            if ($url_path === $request_uri_path) {
                $attributes['className'] = ['current-menu-item'];
            } else {
                // don't match this $url path with all the other paths

            }
        } elseif (0 === strpos($request_uri, $url_path)) {

            // @TODO check that the attributes URL is
            //if ( parse_url( $request_uri, PHP_URL_PATH ) === parse_url( $attributes['url'], PHP_URL_PATH ) ) {
            $attributes['className'] = ['current-menu-item'];
        }
    }
    // Pragmatic workaround to problems when the id's not what Gutenberg thinks it is.
    // Note: ID is no longer an attribute. So this is for backward compatibility.
    unset($attributes['id']);
    return $attributes;
}
