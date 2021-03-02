<?php

declare(strict_types=1);

namespace PinkCrab\Locations\Tests\Intergration\Location;

use WP_UnitTestCase;
use PcLocations_001\PinkCrab\Core\Application\App;
use PcLocations_001\PinkCrab\Core\Application\App_Config;

class Test_Location_Taxonomy extends WP_UnitTestCase {

	/**
	 * @var App
	 */
	protected static $app;

	public static function setUpBeforeClass(): void {
		self::$app = App::get_instance();
	}

	/**
	 * @return App_Config
	 */
	protected function config(): App_Config {
		return self::$app::retreive( 'config' );
	}

	public function test_location_taxonomy_registered(): void {
		$this->assertContains( $this->config()->taxonomies( 'location' ), \get_taxonomies() );
	}

	public function test_location_set_for_events_cpt(): void {
		$taxonomy_details = \get_taxonomy( $this->config()->taxonomies( 'location' ) );
		$this->assertContains( $this->config()->post_types( 'event' ), $taxonomy_details->object_type );
	}
}
