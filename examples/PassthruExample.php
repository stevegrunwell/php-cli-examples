<?php
/**
 * An example of PHP's passthru() function.
 *
 * @link http://us3.php.net/manual/en/function.passthru.php
 */

echo "Let's edit passthru.tmp!" . PHP_EOL;

passthru('vim passthru.tmp');
