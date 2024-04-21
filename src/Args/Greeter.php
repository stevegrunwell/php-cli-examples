<?php

$opts = getopt('g:', [
    'greeting:',
], $index);
$greeting = $opts['greeting'] ?? $opts['g'] ?? 'Hello';
$name = $argv[$index] ?? 'there';

printf("%s, %s!\n", $greeting, $name);
