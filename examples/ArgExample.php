<?php

/**
 * Using the $argc and $argv globals.
 *
 * ## Usage
 *
 * Execute the script with any number of arguments:
 *
 *   php ArgExample.php foo bar baz ...
 *
 * @link http://us3.php.net/manual/en/function.getenv.php
 */

printf('There were %d argument(s) passed to PHP:' . PHP_EOL, $argc);
print_r($argv);
