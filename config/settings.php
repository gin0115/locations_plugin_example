<?php

declare(strict_types=1);

/**
 * Handles all general settings.
 *
 * @package PinkCrab\Locations
 * @author Glynn Quelch <glynn.quelch@gmail.com>
 * @since 0.1.0
 */

$base_path  = \dirname( __DIR__, 1 );
$plugin_dir = \basename( $base_path );
$wp_uploads = \wp_upload_dir();

return array(
	'path'       => array(
		'plugin'         => $base_path,
		'view'           => $base_path . '/views',
		'assets'         => $base_path . '/assets',
		'upload_root'    => $wp_uploads['basedir'],
		'upload_current' => $wp_uploads['path'],
	),
	'url'        => array(
		'plugin'         => plugins_url( $plugin_dir ),
		'view'           => plugins_url( $plugin_dir ) . '/views',
		'assets'         => plugins_url( $plugin_dir ) . '/assets',
		'upload_root'    => $wp_uploads['baseurl'],
		'upload_current' => $wp_uploads['url'],
	),
	'post_types' => array(
		'event' => array(
			'slug' => 'pc_event',
			'meta' => array(
				'date'  => 'pc_event_date',
				'host'  => 'pc_event_host',
				'price' => 'pc_event_price',
			),
		),
	),
	'taxonomies' => array(
		'location' => array(
			'slug' => 'pc_location',
			'term' => array(),
		),
	),
	'plugin'     => array(
		'version' => '0.1.0',
	),
	'namespaces' => array(
		'rest'  => 'pinkcrab_location',
		'cache' => 'pc_location_cache',
	),
);
