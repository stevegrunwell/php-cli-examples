<?php

/**
 * Demonstration of PHP's `getopt()` function.
 *
 * The command accepts three arguments, with both short- and long-form:
 *
 * 1. -r|--required: When present, this option must have a value.
 * 2. -o|--optional: This option may or may not have a value.
 * 3. -b|--boolean: This option must not have a value.
 *
 * @link https://www.php.net/manual/en/function.getopt.php
 */

$opts = getopt(
    'r:o::b',
    [
        'required:',
        'optional::',
        'boolean',
    ],
    $index
);

echo "This is what getopt() parsed out of your call:\n";

foreach ($opts as $opt => $value) {
    $dashes = in_array($opt, ['r', 'o', 'b']) ? '-' : '--';

    printf("\t%s%s: %s\n", $dashes, $opt, var_export($value, true));
}

$remaining_args = array_slice($argv, $index);

if (!empty($remaining_args)) {
    echo "\nWith remaining argument(s):\n";
    array_walk($remaining_args, fn ($arg) => printf("\t* %s\n", $arg));
}
