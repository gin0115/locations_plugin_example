<?php

declare(strict_types=1);

/**
 * Creates the locations taxononmy registerable.
 *
 * @package PinkCrab/Locations
 * @author Glynn Quelch <glynn.quelch@gmail.com>
 * @since 0.1.0
 */

namespace PinkCrab\Locations\Location;

use Exception;
use PcLocations_001\PinkCrab\Registerables\Taxonomy;
use PcLocations_001\PinkCrab\Core\Application\App_Config;

class Location_Taxonomy extends Taxonomy {

	/**
	 * @var string
	 */
	public $singular = 'Location';

	/**
	 * @var string
	 */
	public $plural = 'Locations';

	/**
	 * @var bool
	 */
	public $hierarchical = true;

	/**
	 * Populate slug and post types from config.
	 *
	 * @param App_Config $config
	 * @throws Exception
	 */
	public function __construct( App_Config $config ) {
		// Ensure we have the slug.
		$slug = $config->taxonomies( 'location' );
		if ( ! is_string( $slug ) ) {
			throw new Exception( 'Location taxonomy has not been defined in App_Config' );
		}
		$this->slug = $slug;

		$this->object_type = array( $config->post_types( 'event' ) );
	}
}
