<?php

/**
 * Interacting with system environment variables
 *
 * ## Usage
 *
 * Pass a name using the DEMO_NAME environment variable:
 *
 *   DEMO_NAME=Steve php EnvExample.php
 *
 * If the DEMO_NAME is empty, the script will think you're Fred.
 *
 * @link http://us3.php.net/manual/en/function.getenv.php
 */

$name = getenv('DEMO_NAME');

if ($name) {
    printf('Hey, I recognize you, %s!' . PHP_EOL, $name);
    $name = sprintf('My old friend, %s!', $name);

} else {
    echo "I don't know you, so I'll just call you Fred." . PHP_EOL;
    $name = 'Fred';
}

// Update DEMO_NAME and call the system's echo program.
putenv('DEMO_NAME=' . $name);
print  PHP_EOL . 'According to the environment, your name is: ';
passthru('echo $DEMO_NAME');
