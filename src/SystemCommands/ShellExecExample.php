<?php

/**
 * An example of PHP's shell_exec() function.
 *
 * @link https://www.php.net/manual/en/function.shell-exec.php
 */

$return = shell_exec('php ' . escapeshellarg(__DIR__ . '/Counter.php'));

printf("\nRESULTS:\n\$return => %s\n", var_export($return, true));
