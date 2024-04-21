<?php

/**
 * An example of PHP's system() function.
 *
 * @link https://www.php.net/manual/en/function.system.php
 */

$return = system('php ' . escapeshellarg(__DIR__ . '/Counter.php'), $exit_code);

printf(
    "\nRESULTS:\n\$return => %s\n\$exit_code => %d\n",
    var_export($return, true),
    $exit_code
);
