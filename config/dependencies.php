<?php


declare(strict_types=1);

/**
 * Handles all depenedency injection rules and config.
 *
 * @package PinkCrab\PluginBoilerplate
 * @author Glynn Quelch <glynn.quelch@gmail.com>
 * @since 0.1.0
 */

use PcLocations_001\PinkCrab\Core\Application\App;
use PcLocations_001\PinkCrab\Core\Application\Config;
use PcLocations_001\PinkCrab\BladeOne\BladeOne_Provider;
use PcLocations_001\PinkCrab\Core\Interfaces\Renderable;
use PcLocations_001\PinkCrab\Core\Services\View\PHP_Engine;

return array(
	// Gloabl Rules
	'*' => array(
		'substitutions' => array(
			App::class        => App::get_instance(),
			Renderable::class => BladeOne_Provider::init(
				Config::path( 'view' ),
				Config::path( 'upload_root' ) . 'blade_cache'
			),
			wpdb::class       => $GLOBALS['wpdb'],
		),
	),
);
