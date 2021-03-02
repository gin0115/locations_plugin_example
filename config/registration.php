<?php

declare(strict_types=1);

/**
 * Holds all classes which are to be loaded on initalisation.
 *
 * @package PinkCrab\Locations
 * @author Glynn Quelch <glynn.quelch@gmail.com>
 * @since 0.1.0
 */

use PinkCrab\Locations\Event\Event_Post_Type;
use PinkCrab\Locations\Event\Event_Controller;
use PinkCrab\Locations\Location\Location_Taxonomy;

return array(
	Location_Taxonomy::class,
	Event_Post_Type::class,
	Event_Controller::class,
);
