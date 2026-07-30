<?php
/**
 * Plugin Name: CiviCore Archive Noindex
 * Description: Applies archive indexing controls and keeps the homepage in the XML sitemap.
 * Version: 2.0.0
 * Author: CiviCore IT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Applies noindex, follow to public archive pages that should not be indexed.
 *
 * @param array<string, bool|string> $robots Existing robots directives.
 * @return array<string, bool|string>
 */
function civicore_archive_noindex_robots( array $robots ) {
	if ( ! is_category() && ! is_tag() && ! is_author() ) {
		return $robots;
	}

	unset( $robots['index'], $robots['nofollow'] );
	$robots['noindex'] = true;
	$robots['follow']  = true;

	return $robots;
}
add_filter( 'wp_robots', 'civicore_archive_noindex_robots', 20 );

/**
 * Prevents archive feeds from being indexed.
 */
function civicore_archive_noindex_feed_header() {
	if ( ! is_feed() || ( ! is_category() && ! is_tag() && ! is_author() ) ) {
		return;
	}

	header( 'X-Robots-Tag: noindex, follow', true );
}
add_action( 'template_redirect', 'civicore_archive_noindex_feed_header', 0 );

/**
 * Removes taxonomy and user sitemap providers.
 *
 * @param WP_Sitemaps_Provider|false $provider Sitemap provider instance.
 * @param string                     $name     Sitemap provider name.
 * @return WP_Sitemaps_Provider|false
 */
function civicore_filter_sitemap_provider( $provider, $name ) {
	if ( in_array( $name, array( 'taxonomies', 'users' ), true ) ) {
		return false;
	}

	return $provider;
}
add_filter( 'wp_sitemaps_add_provider', 'civicore_filter_sitemap_provider', 10, 2 );

/**
 * Provides a dedicated sitemap entry for the site homepage.
 */
final class CiviCore_Homepage_Sitemap_Provider extends WP_Sitemaps_Provider {
	/**
	 * Sets provider identifiers.
	 */
	public function __construct() {
		$this->name        = 'homepage';
		$this->object_type = 'homepage';
	}

	/**
	 * Returns the homepage sitemap URL list.
	 *
	 * @param int    $page_num       Sitemap page number.
	 * @param string $object_subtype Optional object subtype.
	 * @return array<int, array<string, string>>
	 */
	public function get_url_list( $page_num, $object_subtype = '' ) {
		if ( 1 !== (int) $page_num ) {
			return array();
		}

		$url           = array( 'loc' => home_url( '/' ) );
		$front_page_id = (int) get_option( 'page_on_front' );

		if ( $front_page_id ) {
			$last_modified = get_post_modified_time( DATE_W3C, true, $front_page_id );

			if ( $last_modified ) {
				$url['lastmod'] = $last_modified;
			}
		}

		return array( $url );
	}

	/**
	 * Returns the number of homepage sitemap pages.
	 *
	 * @param string $object_subtype Optional object subtype.
	 * @return int
	 */
	public function get_max_num_pages( $object_subtype = '' ) {
		return 1;
	}
}

/**
 * Registers the homepage sitemap provider.
 *
 * @param WP_Sitemaps $sitemaps WordPress sitemap server.
 */
function civicore_register_homepage_sitemap_provider( WP_Sitemaps $sitemaps ) {
	$sitemaps->registry->add_provider(
		'homepage',
		new CiviCore_Homepage_Sitemap_Provider()
	);
}
add_action( 'wp_sitemaps_init', 'civicore_register_homepage_sitemap_provider' );
