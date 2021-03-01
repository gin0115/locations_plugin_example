<?php

namespace PcLocations_001\Psr\SimpleCache;

/**
 * Exception interface for invalid cache arguments.
 *
 * When an invalid argument is passed it must throw an exception which implements
 * this interface
 */
interface InvalidArgumentException extends \PcLocations_001\Psr\SimpleCache\CacheException
{
}
