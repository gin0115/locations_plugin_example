<?php

declare(strict_types=1);

/**
 * Handles all general settings.
 *
 * @package PinkCrab\Framework
 * @author Glynn Quelch <glynn.quelch@gmail.com>
 * @since 0.1.0
 */

return array(
	'post_types' => array(
		'events' => array(
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
