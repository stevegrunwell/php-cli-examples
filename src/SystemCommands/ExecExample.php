<?php

/**
 * An example of PHP's exec() function.
 *
 * @link https://www.php.net/manual/en/function.exec.php
 */

$return = exec('php ' . escapeshellarg(__DIR__ . '/Counter.php'), $output, $exit_code);

printf(
    "\nRESULTS:\n\$return => %s\n\$output => %s\n\$exit_code => %d\n",
    var_export($return, true),
    var_export($output, true),
    $exit_code
);
