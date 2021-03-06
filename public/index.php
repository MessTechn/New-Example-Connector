<?php
/**
 * @copyright 2010-2015 JTL-Software GmbH
 * @package Jtl\Connector\Example
 */
require_once dirname(__DIR__). "/bootstrap.php";

use Jtl\Connector\Core\Application\Application;
use Jtl\Connector\Example\Connector;

$application = null;

try {
    // Connector instance
    $connector = new Connector;
    $application = new Application($connector, CONNECTOR_DIR);
    $application->run();
} catch (\Exception $e) {
    if (is_object($application)) {
        $handler = $application->getErrorHandler()->getExceptionHandler();
        $handler($e);
    }
}