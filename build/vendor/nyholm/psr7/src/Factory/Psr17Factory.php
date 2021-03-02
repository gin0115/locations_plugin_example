<?php

declare (strict_types=1);
namespace PcLocations_001\Nyholm\Psr7\Factory;

use PcLocations_001\Nyholm\Psr7\Request;
use PcLocations_001\Nyholm\Psr7\Response;
use PcLocations_001\Nyholm\Psr7\ServerRequest;
use PcLocations_001\Nyholm\Psr7\Stream;
use PcLocations_001\Nyholm\Psr7\UploadedFile;
use PcLocations_001\Nyholm\Psr7\Uri;
use PcLocations_001\Psr\Http\Message\RequestFactoryInterface;
use PcLocations_001\Psr\Http\Message\RequestInterface;
use PcLocations_001\Psr\Http\Message\ResponseFactoryInterface;
use PcLocations_001\Psr\Http\Message\ResponseInterface;
use PcLocations_001\Psr\Http\Message\ServerRequestFactoryInterface;
use PcLocations_001\Psr\Http\Message\ServerRequestInterface;
use PcLocations_001\Psr\Http\Message\StreamFactoryInterface;
use PcLocations_001\Psr\Http\Message\StreamInterface;
use PcLocations_001\Psr\Http\Message\UploadedFileFactoryInterface;
use PcLocations_001\Psr\Http\Message\UploadedFileInterface;
use PcLocations_001\Psr\Http\Message\UriFactoryInterface;
use PcLocations_001\Psr\Http\Message\UriInterface;
/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 * @author Martijn van der Ven <martijn@vanderven.se>
 *
 * @final This class should never be extended. See https://github.com/Nyholm/psr7/blob/master/doc/final.md
 */
class Psr17Factory implements \PcLocations_001\Psr\Http\Message\RequestFactoryInterface, \PcLocations_001\Psr\Http\Message\ResponseFactoryInterface, \PcLocations_001\Psr\Http\Message\ServerRequestFactoryInterface, \PcLocations_001\Psr\Http\Message\StreamFactoryInterface, \PcLocations_001\Psr\Http\Message\UploadedFileFactoryInterface, \PcLocations_001\Psr\Http\Message\UriFactoryInterface
{
    public function createRequest(string $method, $uri) : \PcLocations_001\Psr\Http\Message\RequestInterface
    {
        return new \PcLocations_001\Nyholm\Psr7\Request($method, $uri);
    }
    public function createResponse(int $code = 200, string $reasonPhrase = '') : \PcLocations_001\Psr\Http\Message\ResponseInterface
    {
        if (2 > \func_num_args()) {
            // This will make the Response class to use a custom reasonPhrase
            $reasonPhrase = null;
        }
        return new \PcLocations_001\Nyholm\Psr7\Response($code, [], null, '1.1', $reasonPhrase);
    }
    public function createStream(string $content = '') : \PcLocations_001\Psr\Http\Message\StreamInterface
    {
        return \PcLocations_001\Nyholm\Psr7\Stream::create($content);
    }
    public function createStreamFromFile(string $filename, string $mode = 'r') : \PcLocations_001\Psr\Http\Message\StreamInterface
    {
        $resource = @\fopen($filename, $mode);
        if (\false === $resource) {
            if ('' === $mode || \false === \in_array($mode[0], ['r', 'w', 'a', 'x', 'c'])) {
                throw new \InvalidArgumentException('The mode ' . $mode . ' is invalid.');
            }
            throw new \RuntimeException('The file ' . $filename . ' cannot be opened.');
        }
        return \PcLocations_001\Nyholm\Psr7\Stream::create($resource);
    }
    public function createStreamFromResource($resource) : \PcLocations_001\Psr\Http\Message\StreamInterface
    {
        return \PcLocations_001\Nyholm\Psr7\Stream::create($resource);
    }
    public function createUploadedFile(\PcLocations_001\Psr\Http\Message\StreamInterface $stream, int $size = null, int $error = \UPLOAD_ERR_OK, string $clientFilename = null, string $clientMediaType = null) : \PcLocations_001\Psr\Http\Message\UploadedFileInterface
    {
        if (null === $size) {
            $size = $stream->getSize();
        }
        return new \PcLocations_001\Nyholm\Psr7\UploadedFile($stream, $size, $error, $clientFilename, $clientMediaType);
    }
    public function createUri(string $uri = '') : \PcLocations_001\Psr\Http\Message\UriInterface
    {
        return new \PcLocations_001\Nyholm\Psr7\Uri($uri);
    }
    public function createServerRequest(string $method, $uri, array $serverParams = []) : \PcLocations_001\Psr\Http\Message\ServerRequestInterface
    {
        return new \PcLocations_001\Nyholm\Psr7\ServerRequest($method, $uri, [], null, '1.1', $serverParams);
    }
}
