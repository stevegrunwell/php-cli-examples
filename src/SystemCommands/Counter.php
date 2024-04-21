<?php declare(strict_types=1);

/**
 * Simple script that prints 1–5, one second at a time.
 */

for ($counter = 1; $counter <= 5; $counter++) {
    echo "\$counter = {$counter}\n";
    sleep(1);
}
