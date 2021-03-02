<?php

declare(strict_types=1);

/**
 * Maps data to Event models.
 *
 * @since 0.1.0
 * @author Glynn Quelch <glynn.quelch@gmail.com>
 * @package PinkCrab/Locations
 */

namespace PinkCrab\Locations\Event;

use stdClass;
use PinkCrab\Locations\Event\Event;
use PinkCrab\Locations\Event\Event_Repository;

class Event_Mapper {

	/**
	 * @var Event_Repository
	 */
	protected $event_repository;

	public function __construct( Event_Repository $event_repository ) {
		$this->event_repository = $event_repository;
	}

	/**
	 * Maps from WP_Post
	 *
	 * @param \WP_Post $post
	 * @return \PinkCrab\Locations\Event\Event
	 */
	public function from_post( \WP_Post $post ): Event {
		$event = $this->find( (int) $post->ID );
		return $event;
	}

	/**
	 * Calls find on the repository and maps to a DTO if results found.
	 *
	 * @param int $id
	 * @return \PinkCrab\Locations\Event\Event|null
	 */
	protected function find( int $id ): ?Event {

		$event = $this->event_repository->find( $id );

		if ( is_null( $event ) ) {
			return $event;
		}

		return $this->from_dto( $event );
	}

	/**
	 * Maps an event from a dto.
	 *
	 * @param \stdClass $dto
	 * @return \PinkCrab\Locations\Event\Event
	 */
	protected function from_dto( stdClass $dto ): Event {
		$event = new Event( $dto->title, (int) $dto->id );
		$event->set_slug( $dto->slug );
		$event->set_description( $dto->content );

		return $event;
	}

}
