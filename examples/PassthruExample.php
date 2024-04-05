<?php

/**
 * An example of PHP's passthru() function.
 *
 * This will open passthru.tmp in Vim.
 *
 * @link http://us3.php.net/manual/en/function.passthru.php
 */

echo "Let's edit this file in Vim!" . PHP_EOL;
echo 'Remember: ESC followed by ":q!" and ENTER to quit ;)' . PHP_EOL;

passthru('vim ' . escapeshellarg(__FILE__));
