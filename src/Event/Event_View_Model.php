<?php

declare(strict_types=1);

/**
 * The view model used by Events
 *
 * @since 0.1.0
 * @package PinkCrab/Locations
 * @author Glynn Quelch <glynn.quelch@gmail.com>
 */

namespace PinkCrab\Locations\Event;

use PinkCrab\Locations\Event\Event;
use PcLocations_001\PinkCrab\Form_Fields\Abstract_Field;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Date_Time;

class Event_View_Model {

	/**
	 * @var Event
	 */
	protected $event;

	public function __construct( Event $event ) {
		$this->event = $event;
	}

	/**
	 * Returns a populated date field with the event time.
	 *
	 * @param string $key
	 * @return \PcLocations_001\PinkCrab\Form_Fields\Abstract_Field
	 */
	public function date( string $key ): Abstract_Field {
		return Input_Date_Time::create( $key )
			->class( 'event_field datetime' )
			->label( 'Event start date/time' )
			->show_label()
			->current( $this->event->get_date() );
	}

}
