#!/usr/bin/env php
<?php

if (!function_exists('pcntl_fork')) {
    echo "This demo requires the pcntl PHP extension.\n";
    exit(1);
}

echo "Let's spin up five children, shall we?\n";

// Spin up five forks
for ($i = 1; $i <= 5; $i++) {
    $pid = pcntl_fork();

    if ($pid === -1) {
        echo 'Unable to fork process, exiting.';
        exit(1);
    }

    // When $pid is 0, we're in the child process.
    if ($pid === 0) {
        $wait = rand(0, 10);
        printf("[Child %d] has process ID of %d and is waiting for %d seconds...\n", $i, posix_getpid(), $wait);
        sleep($wait);
        printf("[Child %d] is complete!\n", $i);

        // To demonstrate error codes, let the middle child be trouble.
        if ($i === 3) {
            exit(1);
        }

        exit;
    }
}

while (pcntl_waitpid(0, $status) !== -1) {
    $status = pcntl_wexitstatus($status);

    if ($status === 1) {
        echo "Uh oh, *someone* exited with a 1!\n";
    }
}

echo "This concludes our demo of pnctl_fork!";
