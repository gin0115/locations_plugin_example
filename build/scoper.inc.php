<?php

declare (strict_types=1);
namespace PcLocations_001;

use PcLocations_001\Isolated\Symfony\Component\Finder\Finder;
// Returns an array of all symbols from processed stubs.
$patcherProvider = function () {
    $patcherDir = __DIR__ . '/build-tools/patchers';
    $stubFiles = \array_diff(\scandir($patcherDir), array('..', '.'));
    $symbols = array();
    foreach ($stubFiles as $stub) {
        try {
            // Attempt to unserialize
            $stubSymbols = \unserialize(\file_get_contents($patcherDir . '/' . $stub));
            if (!\is_array($stubSymbols)) {
                throw new \Exception('Array of symbols expected');
            }
            $symbols = \array_merge($symbols, $stubSymbols);
        } catch (\Throwable $th) {
            die($th->getMessage());
        }
    }
    return $symbols;
};
return array('prefix' => 'PcLocations_001', 'finders' => array(\PcLocations_001\Isolated\Symfony\Component\Finder\Finder::create()->files()->ignoreVCS(\true)->notName('/LICENSE|.*\\.md|.*\\.dist|Makefile|composer\\.json|composer\\.lock/')->exclude(array('doc', 'test', 'test_old', 'tests', 'Tests', 'vendor-bin'))->in('vendor'), \PcLocations_001\Isolated\Symfony\Component\Finder\Finder::create()->append(array('composer.json'))), 'patchers' => array(function ($filePath, $prefix, $contents) use($patcherProvider) {
    $prefixDoubleSlashed = \str_replace('\\', '\\\\', $prefix);
    $quotes = array('\'', '"', '`');
    foreach ($patcherProvider() as $identifier) {
        $contents = \str_replace("\\{$prefix}\\{$identifier}", "\\{$identifier}", $contents);
    }
    // Custom functions.
    $contents = \str_replace("\\{$prefix}\\get_current_screen", '\\get_current_screen', $contents);
    return $contents;
}), 'whitelist' => array('PHPUnit\\Framework\\*', 'PcLocations_001\\Composer\\Autoload\\ClassLoader', 'PinkCrab\\Locations\\*', 'PinkCrab\\WP\\Locations\\*'), 'whitelist-global-constants' => \true, 'whitelist-global-classes' => \true, 'whitelist-global-functions' => \true);
