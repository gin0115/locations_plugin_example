<?php

declare(strict_types=1);

/**
 * Locations Model
 *
 * @package PinkCrab/Locations
 * @author Glynn Quelch <glynn.quelch@gmail.com>
 * @since 0.1.0
 */

namespace PinkCrab\Locations\Location;

class Location {

	/**
	 * The location slug
	 *
	 * @var string
	 */
	protected $slug;

	/**
	 * The location name
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $image = '';

	/**
	 * @var string
	 */
	protected $description = '';

	public function __construct( string $slug, string $name ) {
		$this->slug = $slug;
		$this->name = $name;
	}

	/**
	 * Get the value of slug
	 */
	public function get_slug(): string {
		return $this->slug;
	}

	/**
	 * Set the location slug
	 *
	 * @param string $slug  The location slug
	 * @return self
	 */
	public function set_slug( string $slug ): self {
		$this->slug = $slug;
		return $this;
	}

	/**
	 * Get the value of name
	 */
	public function get_name(): string {
		return $this->name;
	}

	/**
	 * Set the location name
	 *
	 * @param string $name  The location name
	 * @return self
	 */
	public function set_name( string $name ): self {
		$this->name = $name;
		return $this;
	}

	/**
	 * Get the value of image
	 */
	public function get_image(): string {
		return $this->image;
	}

	/**
	 * Set the value of image
	 *
	 * @param string $image
	 * @return self
	 */
	public function set_image( string $image ): self {
		$this->image = $image;
		return $this;
	}

	/**
	 * Get the value of description
	 */
	public function get_description(): string {
		return $this->description;
	}

	/**
	 * Set the value of description
	 *
	 * @return self
	 */
	public function set_description( string $description ): self {
		$this->description = $description;
		return $this;
	}
}
