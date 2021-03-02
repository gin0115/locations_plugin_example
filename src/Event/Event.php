<?php

declare(strict_types=1);

/**
 * Event Model
 *
 * @package PinkCrab/Locations
 * @author Glynn Quelch <glynn.quelch@gmail.com>
 * @since 0.1.0
 */

namespace PinkCrab\Locations\Event;

use DateTimeImmutable;
use PinkCrab\Locations\Location\Location;

class Event {

	/**
	 * @var int
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $slug;

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var DateTimeImmutable
	 */
	protected $date;

	/**
	 * @var Location
	 */
	protected $location;

	/**
	 * @var string
	 */
	protected $description = '';

	/**
	 * @var string
	 */
	protected $excerpt = '';

	/**
	 * @var string
	 */
	protected $price = '';

	/**
	 * @var array<string, string>
	 */
	protected $links = array();

	/**
	 * @var array<int, object>
	 */
	protected $tags = array();

	public function __construct( string $title, ?int $id = null ) {
		$this->title = $title;
		$this->id    = $id;
	}

	/**
	 * Get the value of slug
	 *
	 * @return string
	 */
	public function get_slug(): string {
		return $this->slug;
	}

	/**
	 * Set the value of slug
	 *
	 * @param string $slug
	 *
	 * @return self
	 */
	public function set_slug( string $slug ): self {
		$this->slug = $slug;
		return $this;
	}

	/**
	 * Get the value of title
	 *
	 * @return string
	 */
	public function get_title(): string {
		return $this->title;
	}

	/**
	 * Set the value of title
	 *
	 * @param string $title
	 *
	 * @return self
	 */
	public function set_title( string $title ): self {
		$this->title = $title;
		return $this;
	}

	/**
	 * Get the value of date
	 *
	 * @return DateTimeImmutable
	 */
	public function get_date(): DateTimeImmutable {
		return $this->date;
	}

	/**
	 * Set the value of date
	 *
	 * @param DateTimeImmutable $date
	 *
	 * @return self
	 */
	public function set_date( DateTimeImmutable $date ): self {
		$this->date = $date;
		return $this;
	}

	/**
	 * Get the value of location
	 *
	 * @return Location
	 */
	public function get_location(): Location {
		return $this->location;
	}

	/**
	 * Set the value of location
	 *
	 * @param Location $location
	 *
	 * @return self
	 */
	public function set_location( Location $location ): self {
		$this->location = $location;
		return $this;
	}

	/**
	 * Get the value of description
	 *
	 * @return string
	 */
	public function get_description(): string {
		return $this->description;
	}

	/**
	 * Set the value of description
	 *
	 * @param string $description
	 *
	 * @return self
	 */
	public function set_description( string $description ): self {
		$this->description = $description;
		return $this;
	}

	/**
	 * Get the value of excerpt
	 *
	 * @return string
	 */
	public function get_excerpt(): string {
		return $this->excerpt;
	}

	/**
	 * Set the value of excerpt
	 *
	 * @param string $excerpt
	 *
	 * @return self
	 */
	public function set_excerpt( string $excerpt ): self {
		$this->excerpt = $excerpt;
		return $this;
	}

	/**
	 * Get the value of price
	 *
	 * @return string
	 */
	public function get_price(): string {
		return $this->price;
	}

	/**
	 * Set the value of price
	 *
	 * @param string $price
	 *
	 * @return self
	 */
	public function set_price( string $price ): self {
		$this->price = $price;
		return $this;
	}

	/**
	 * Get string
	 *
	 * @return array<string, string>
	 */
	public function get_links(): array {
		return $this->links;
	}

	/**
	 * Set string
	 *
	 * @param array<string, string>
	 *
	 * @return self
	 */
	public function set_links( array $links ): self {
		$this->links = $links;
		return $this;
	}

	/**
	 * Adds an additional link.
	 *
	 * @param string $title
	 * @param string $url
	 * @return void
	 */
	public function add_link( string $title, string $url ) {
		$this->links[ $title ] = $url;
		return $this;
	}



	/**
	 * Get Tags
	 *
	 * @return array<int, object>
	 */
	public function get_tags(): array {
		return $this->tags;
	}

	/**
	 * Set Tag
	 *
	 * @param array<int, object>
	 *
	 * @return self
	 */
	public function set_tags( array $tags ): self {
		$this->tags = $tags;
		return $this;
	}

	/**
	 * Adds a single tag.
	 *
	 * @param object $tag
	 * @return self
	 */
	public function add_tag( object $tag ) : self {
		$this->tags[] = $tag;
		return $this;
	}
}
