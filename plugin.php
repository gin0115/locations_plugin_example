<?php

use PinkCrab\Locations\Test;
use PinkCrab\WP\Locations\Activation;
use PcLocations_001\Nyholm\Psr7\Request;
use PcLocations_001\PinkCrab\Core\Application\App;


/**
 * @wordpress-plugin
 * Plugin Name:     PinkCrab Locations
 * Plugin URI:      https://github.com/Pink-Crab
 * Description:     A simple example plugin built with the PinkCrab plugin framework.
 * Version:         0.1.0
 * Author:          Glynn Quelch (PinkCrab)
 * Author URI:      https://github.com/Pink-Crab
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     PC_Locations
 */




if ( ! defined( 'ABSPATH' ) ) {
	die;
}

require_once __DIR__ . '/pc_vendor/autoload.php';
require_once __DIR__ . '/bootstrap.php';

dump( new Test(), new Request( 'GET', 'dddd' ) );
// Include activate and deactivate hooks (can be removed if not using the hooks).
register_activation_hook( __FILE__, array( App::make( Activation::class ), 'activate' ) );
// register_deactivation_hook( __FILE__, array( App::make( Deactivation::class ), 'deactivate' ) );

