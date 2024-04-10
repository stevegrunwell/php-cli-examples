<?php

/**
 * Interacting with system environment variables
 *
 * ## Usage
 *
 * Pass an animal (dog, cat, or bird) via the ANIMAL environment
 * variable to learn what sound they make and set the ANIMAL_SOUND
 * environment variable.
 *
 *   ANIMAL=dog php EnvExample.php
 *
 * If we don't recognize the animal, we'll use a value of "unknown"
 * and not unset the ANIMAL env var.
 *
 * @link https://www.php.net/manual/en/function.getenv.php
 * @link https://www.php.net/manual/en/function.putenv.php
 */

$animal = strtolower(getenv('ANIMAL')) ?: 'fox';

switch ($animal) {
    case 'dog':
        $sound = 'woof!';
        break;
    case 'cat':
        $sound = 'meow!';
        break;
    case 'bird':
        $sound = 'tweet!';
        break;
    default:
        $sound = 'unknown';
        break;
}

if ($sound !== 'unknown') {
    echo "The {$animal} goes \"{$sound}\"\n";

    // Mystery solved, we can unset the ANIMAL env var.
    putenv('ANIMAL=');
} else {
    echo "I don't know what sound the {$animal} makes!\n";
}

// Store the sound in the ANIMAL_SOUND env var.
putenv("ANIMAL_SOUND={$sound}");

printf(
    "\nANIMAL=%s\nANIMAL_SOUND=%s\n",
    exec('echo $ANIMAL') ?: '<empty>',
    exec('echo $ANIMAL_SOUND') ?: '<empty>'
);
