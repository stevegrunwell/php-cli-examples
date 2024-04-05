<?php

/**
 * An example of PHP's exec() function.
 *
 * @link http://us3.php.net/manual/en/function.exec.php
 */

echo 'Running `exec(\'which phpcs\')`...' . PHP_EOL;

$phpcsPath = exec('which phpcs');

if ($phpcsPath) {
    printf('PHP_CodeSniffer was found at %s', $phpcsPath);
} else {
    echo 'PHP_CodeSniffer was not found in your path.';
}

echo PHP_EOL;
