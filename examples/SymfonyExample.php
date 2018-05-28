#!/usr/bin/env php
<?php
/**
 * Example command using the Symfony Console component.
 *
 * @link http://symfony.com/doc/current/components/console
 */

// Require dependencies.
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/SymfonyExampleCommand.php';

use Symfony\Component\Console\Application;

/**
 * Bootstrap a Symfony Application with our command.
 */
$application = new Application();
$application->add(new SymfonyExample());
$application->run();
