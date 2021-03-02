<?php

declare(strict_types=1);

namespace PinkCrab\Locations\Event;

use Exception;
use PcLocations_001\PinkCrab\Core\Application\App;
use PcLocations_001\PinkCrab\Registerables\MetaBox;
use PcLocations_001\PinkCrab\Core\Services\View\View;
use PcLocations_001\PinkCrab\Registerables\Post_Type;
use PcLocations_001\PinkCrab\Core\Application\App_Config;
use PcLocations_001\Psr\Http\Message\ServerRequestInterface;

class Event_Post_Type extends Post_Type {

	/**
	 * @var string
	 */
	public $singular = 'Event';

	/**
	 * @var string
	 */
	public $plural = 'Events';

	/**
	 * @param View $view
	 * @param App_Config $config
	 * @param ServerRequestInterface $request
	 */
	public function __construct( App_Config $config ) {
		// Set the slug from config, throw exception if not passed.
		$slug = $config->post_types( 'event' );
		if ( ! is_string( $slug ) ) {
			throw new Exception( 'Event cpt has not been defined in App_Config' );
		}
		$this->key = $slug;
	}

}
