<?php
/**
 * An example of PHP's passthru() function.
 *
 * This will open passthru.tmp in Vim.
 *
 * @link http://us3.php.net/manual/en/function.passthru.php
 */

echo "Let's edit passthru.tmp!" . PHP_EOL;

passthru('vim passthru.tmp');
