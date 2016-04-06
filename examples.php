#!/usr/bin/env php
<?php

// Require dependencies.
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/examples/SymfonyExample.php';

use Symfony\Component\Console\Application;

// Symfony application and command.
$application = new Application();
$application->add(new SymfonyExample());
$application->run();
