<?php

/**
 * An example of PHP's passthru() function.
 *
 * @link https://www.php.net/manual/en/function.passthru.php
 */

$fh = tmpfile();
$filepath = stream_get_meta_data($fh)['uri'];
$counter = 0;

passthru('tail ' . escapeshellarg($filepath));

while (true) {
    fputs($fh, "\$counter = {$counter}");
    $counter++;
    sleep(1);
}

