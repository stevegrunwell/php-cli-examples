<?php
/**
 * Demonstrate common exit codes.
 *
 * @link http://us3.php.net/manual/en/function.getenv.php
 */

// If we receive any arguments, exit with a status of 1.
$code = 1 < $argc ? 1 : 0;

printf('Exiting with a code of %d' . PHP_EOL, $code);

exit($code);
