<?php

declare(strict_types=1);

/**
 * Locations Repository Interface
 *
 * @package PinkCrab/Locations
 * @author Glynn Quelch <glynn.quelch@gmail.com>
 * @since 0.1.0
 */

namespace PinkCrab\Locations\Location;

use PinkCrab\Locations\Location\Location;

interface Location_Repository {

	/**
	 * Finds a loaction based on its slug.
	 *
	 * @param string $slug
	 * @return \PinkCrab\Locations\Location\Location|null
	 */
	public function find( string $slug ): ?Location;

	/**
	 * Upserts a new location
	 *
	 * @param \PinkCrab\Locations\Location\Location $location
	 * @return bool
	 */
	public function upsert( Location $location): bool;

	/**
	 * Deletes a location
	 *
	 * @param \PinkCrab\Locations\Location\Location $location
	 * @return bool
	 */
	public function delete( Location $location): bool;

	/**
	 * Returns all events for a location
	 *
	 * @param \PinkCrab\Locations\Location\Location $location
	 * @return array
	 */
	public function events( Location $location): array;
}
