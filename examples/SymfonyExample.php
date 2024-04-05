#!/usr/bin/env php
<?php

namespace SteveGrunwell\PhpCliExamples;

/**
 * Example command using the Symfony Console component.
 *
 * Run this with the following:
 *
 *     php SymfonyExample.php hello-there <name>
 *
 * @link http://symfony.com/doc/current/components/console
 */

// Require dependencies.
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;

/**
 * Bootstrap a Symfony Application with our command.
 */
$application = new Application();
$application->add(new SymfonyExampleCommand());
$application->run();
