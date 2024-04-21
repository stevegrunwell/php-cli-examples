<?php

/**
 * An example of PHP's passthru() function.
 *
 * @link https://www.php.net/manual/en/function.passthru.php
 */

$return = passthru('php ' . escapeshellarg(__DIR__ . '/Counter.php'));

printf("\nRESULTS:\n\$return => %s\n", var_export($return, true));
