<?php

/**
 * Demonstrate common exit codes.
 *
 * ## Usage
 *
 * If you pass any arguments, the script will exit with a code of 1.
 * Otherwise, the script will exit with 0.
 *
 *   # Will print "0".
 *   php ExitCodeExample.php && echo $?
 *
 *   # Will exit with "1".
 *   php ExitCodeExample.php foo bar
 *
 * You may also verify the exit codes by echoing "$?" after the command.
 *
 *   # Will exit with "1"
 *   php ExitCodeExample.php hello; echo $?
 *
 * @link https://www.php.net/manual/en/function.exit.php
 */

// If we receive any arguments, exit with a status of 1.
$code = $argc > 1 ? 1 : 0;

printf('Exiting with a code of %d' . PHP_EOL, $code);

exit($code);
