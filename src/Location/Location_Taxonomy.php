<?php

declare(strict_types=1);

/**
 * Creates the locations taxononmy registerable.
 */

namespace PinkCrab\Locations\Location;

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
	 */
	public function __construct( App_Config $config ) {
		$this->slug        = $config->taxonomies( 'location' );
		$this->object_type = array( $config->post_types( 'events' ) );
	}
}
