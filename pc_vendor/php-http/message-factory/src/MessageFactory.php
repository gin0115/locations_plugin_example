<?php

namespace PcLocations_001\Http\Message;

/**
 * Factory for PSR-7 Request and Response.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface MessageFactory extends \PcLocations_001\Http\Message\RequestFactory, \PcLocations_001\Http\Message\ResponseFactory
{
}
