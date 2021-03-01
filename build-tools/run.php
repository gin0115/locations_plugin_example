<?php

require dirname( __DIR__, 1 ) . '/vendor/autoload.php';
require __DIR__ . '/PatcherCreator/IdentifierExtractor.php';

use pxlrbt\PhpScoper\PrefixRemover\IdentifierExtractor;

// Extract all identifiers from stubs.
$wp_patcher = ( new IdentifierExtractor() )
	->addStub( __DIR__ . '/Stubs/WP_Stubs.php' )
	->extract();

// Write as an array.
file_put_contents(
	'build-tools/wp_patcher.do',
	serialize(
		array_map(
			function( $e ) {
				return $e->name;
			},
			$wp_patcher
		)
	)
);
