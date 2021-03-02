<?php

declare(strict_types=1);

/**
 * Handles all depenedency injection rules and config.
 *
 * @package PinkCrab\Locations
 * @author Glynn Quelch <glynn.quelch@gmail.com>
 * @since 0.1.0
 */

use PinkCrab\Locations\Event\Event_Post_Type;
use PcLocations_001\PinkCrab\HTTP\HTTP_Helper;
use PinkCrab\Locations\Event\Event_Controller;
use PinkCrab\Locations\Event\Event_Repository;
use PcLocations_001\PinkCrab\Core\Application\App;
use PcLocations_001\PinkCrab\Registerables\Post_Type;
use PcLocations_001\PinkCrab\BladeOne\BladeOne_Provider;
use PcLocations_001\PinkCrab\Core\Interfaces\Renderable;
use PcLocations_001\PinkCrab\Core\Application\App_Config;
use PcLocations_001\Psr\Http\Message\ServerRequestInterface;
use PinkCrab\Locations\Event\Repositories\Event_Post_Repository;

// Gets the apps config array.
$config = App::retreive( 'config' );

return array(
	// Gloabl Rules
	'*'                     => array(
		'substitutions' => array(
			App::class                    => App::get_instance(),
			App_Config::class             => $config,
			Renderable::class             => BladeOne_Provider::init(
				$config->path( 'view' ),
				$config->path( 'upload_root' ) . 'blade_cache'
			),
			wpdb::class                   => $GLOBALS['wpdb'],
			ServerRequestInterface::class => HTTP_Helper::global_server_request(),
			Event_Repository::class       => Event_Post_Repository::class,
		),
	),
	Event_Controller::class => array(
		'substitutions' => array(
			Post_Type::class => Event_Post_Type::class,
		),
	),
);
