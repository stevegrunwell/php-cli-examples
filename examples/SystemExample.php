<?php
/**
 * An example of PHP's system() function.
 *
 * @link http://us3.php.net/manual/en/function.system.php
 */

echo 'Current directory contents:' . PHP_EOL;

system('ls -a', $status);

printf( '`ls` command exited with status "%d"' . PHP_EOL, $status );
