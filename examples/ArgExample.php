<?php
/**
 * Using the $argc and $argv globals.
 *
 * @link http://us3.php.net/manual/en/function.getenv.php
 */

printf('There were %d arguments passed to PHP:' . PHP_EOL, $argc);
print_r($argv);
