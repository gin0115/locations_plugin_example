<?php

declare (strict_types=1);
namespace PcLocations_001\Nyholm\Psr7\Factory;

use PcLocations_001\Http\Message\MessageFactory;
use PcLocations_001\Http\Message\StreamFactory;
use PcLocations_001\Http\Message\UriFactory;
use PcLocations_001\Nyholm\Psr7\Request;
use PcLocations_001\Nyholm\Psr7\Response;
use PcLocations_001\Nyholm\Psr7\Stream;
use PcLocations_001\Nyholm\Psr7\Uri;
use PcLocations_001\Psr\Http\Message\UriInterface;
/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 * @author Martijn van der Ven <martijn@vanderven.se>
 *
 * @final This class should never be extended. See https://github.com/Nyholm/psr7/blob/master/doc/final.md
 */
class HttplugFactory implements \PcLocations_001\Http\Message\MessageFactory, \PcLocations_001\Http\Message\StreamFactory, \PcLocations_001\Http\Message\UriFactory
{
    public function createRequest($method, $uri, array $headers = [], $body = null, $protocolVersion = '1.1')
    {
        return new \PcLocations_001\Nyholm\Psr7\Request($method, $uri, $headers, $body, $protocolVersion);
    }
    public function createResponse($statusCode = 200, $reasonPhrase = null, array $headers = [], $body = null, $version = '1.1')
    {
        return new \PcLocations_001\Nyholm\Psr7\Response((int) $statusCode, $headers, $body, $version, $reasonPhrase);
    }
    public function createStream($body = null)
    {
        return \PcLocations_001\Nyholm\Psr7\Stream::create($body ?? '');
    }
    public function createUri($uri = '') : \PcLocations_001\Psr\Http\Message\UriInterface
    {
        if ($uri instanceof \PcLocations_001\Psr\Http\Message\UriInterface) {
            return $uri;
        }
        return new \PcLocations_001\Nyholm\Psr7\Uri($uri);
    }
}
