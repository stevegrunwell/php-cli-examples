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
 * @link https://www.php.net/manual/en/reserved.variables.argc.php
 * @link https://www.php.net/manual/en/reserved.variables.argv.php
 */

printf('There were %d argument(s) passed to PHP:' . PHP_EOL, $argc);
print_r($argv);
