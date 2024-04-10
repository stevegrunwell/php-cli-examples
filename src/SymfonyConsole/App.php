#!/usr/bin/env php
<?php

/**
 * Example Symfony Console application.
 *
 * Run this with the following:
 *
 *     php App.php hello-there <name>
 *
 * @link http://symfony.com/doc/current/components/console
 */

namespace SteveGrunwell\PhpCliExamples\SymfonyConsole;

use Symfony\Component\Console\Application;

// Require dependencies.
require_once __DIR__ . '/../../vendor/autoload.php';

// Bootstrap a Symfony Application with our command.
$application = new Application();
$application->add(new HelloCommand());
$application->add(new ShowOffCommand());
$application->run();
