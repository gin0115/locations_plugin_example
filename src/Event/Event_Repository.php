<?php

declare(strict_types=1);

/**
 * Event repository interface
 *
 * @since 0.1.0
 * @author Glynn Quelch <glynn.quelch@gmail.com>
 * @package PinkCrab/Locations
 */

namespace PinkCrab\Locations\Event;

use stdClass;


interface Event_Repository {

	/**
	 * Finds an event based on its ID.
	 *
	 * @param int $id
	 * @return stdClass|null
	 */
	public function find( int $id ): ?stdClass;
}
