<?php
/**
 * An example of PHP's shell_exec() function.
 *
 * @link http://us3.php.net/manual/en/function.shell-exec.php
 */

echo 'Running `shell_exec(\'ls -a\')`...' . PHP_EOL;

$ls = shell_exec('ls -a');
echo $ls . PHP_EOL;
