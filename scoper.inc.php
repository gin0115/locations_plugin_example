<?php

declare(strict_types=1);

require __DIR__ . '/build-tools/PatcherCreator/RemovePrefixPatcher.php';

use Isolated\Symfony\Component\Finder\Finder;

return array(
	'prefix'                     => 'PcLocations_001',
	'finders'                    => array(
		// Finder::create()->files()->in( 'src' ),
		Finder::create()
			->files()
			->ignoreVCS( true )
			->notName( '/LICENSE|.*\\.md|.*\\.dist|Makefile|composer\\.json|composer\\.lock/' )
			->exclude(
				array(
					'doc',
					'test',
					'test_old',
					'tests',
					'Tests',
					'vendor-bin',
				)
			)
			->in( 'vendor' ),
		Finder::create()->append(
			array(
				'composer.json',
			)
		),
	),
	'patchers'                   => array(
		function ( $filePath, $prefix, $contents ) {
			$prefixDoubleSlashed = str_replace( '\\', '\\\\', $prefix );
			$quotes = array( '\'', '"', '`' );

			foreach ( unserialize( file_get_contents( __DIR__ . '/build-tools/wp_patcher.do' ) ) as $identifier ) {
				$contents = str_replace( "\\$prefix\\$identifier", "\\$identifier", $contents );
			}

			return $contents;
		},
	),
	'whitelist'                  => array(
		'PHPUnit\Framework\*',
		'Composer\Autoload\ClassLoader',
		'PinkCrab\Locations\*',
		'PinkCrab\WP\Locations\*',
	),
	'whitelist-global-constants' => true,
	'whitelist-global-classes'   => true,
	'whitelist-global-functions' => true,
);
