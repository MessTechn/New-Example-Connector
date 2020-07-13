<?php

namespace Jtl\Connector\Example;

use DI\Container;
use Jtl\Connector\Core\Authentication\TokenValidatorInterface;
use Jtl\Connector\Core\Connector\ConnectorInterface;
use Jtl\Connector\Core\Mapper\PrimaryKeyMapperInterface;
use Jtl\Connector\Example\Authentication\TokenLoader;
use Jtl\Connector\Example\Mapper\PrimaryKeyMapper;
use Noodlehaus\ConfigInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;

/**
 * Example Connector
 *
 * @access public
 */
class Connector implements ConnectorInterface
{
    public function initialize(ConfigInterface $config, Container $container, EventDispatcher $eventDispatcher) : void
    {

    }
    
    public function getPrimaryKeyMapper() : PrimaryKeyMapperInterface
    {
        return new PrimaryKeyMapper;
    }

    public function getTokenValidator() : TokenValidatorInterface
    {
        return new TokenLoader;
    }

    public function getControllerNamespace() : string
    {
        return "Jtl\Connector\Example\Controller";
    }

    public function getEndpointVersion() : string
    {
        // TODO: Implement getEndpointVersion() method.
    }
    
    public function getPlatformVersion() : string
    {
        // TODO: Implement getPlatformVersion() method.
    }

    public function getPlatformName() : string
    {
        // TODO: Implement getPlatformName() method.
    }
}