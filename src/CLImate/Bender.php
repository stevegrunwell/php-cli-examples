<?php

/**
 * Demonstrate some fun features in CLImate by playing "Where's Bender?"
 *
 * @link https://climate.thephpleague.com/
 */

use League\CLImate\CLImate;

require_once __DIR__ . '/../../vendor/autoload.php';

$cli = new CLImate();
$cli->cyan()->underline()->blink("Let's do something cool!")->br();
$name_prompt = $cli->input('First, what is your name?')->defaultTo('Fry');
$name = $name_prompt->prompt();

$confirmation = $cli->confirm("Okay, {$name}, are you ready?");

if (! $confirmation->confirmed()) {
    $cli->error('Too bad, maybe next time!');
    exit;
}

$direction_prompt = $cli->radio(
    "Where's Bender?",
    [
        'top'    => 'Up there',
        'bottom' => 'Down there',
        'left'   => 'To my left',
        'right'  => 'To my right',
    ]
);
$direction = $direction_prompt->prompt();
$cli->clear();
$cli->animation('bender')->enterFrom($direction);

$cli->br()->green('This concludes our game of "Where\'s Bender?" Goodbye!');
