# System Commands

This directory contains scripts demonstrating the various ways that PHP can execute other system commands.

Each of these scripts runs the same command, [Counter.php](Counter.php), which takes five seconds to run and prints five lines, showing the incrementing value of the `$counter` variable.

Example outputs for each of the scripts are below:

## [ExecExample.php](ExecExample.php)

Demonstrates [the `exec()` function](https://www.php.net/manual/en/function.exec.php). Notice that the results aren't shown until after the five seconds have elapsed.

```
$ php ExecExample.php

RESULTS:
$return => '$counter = 5'
$output => array (
  0 => '$counter = 1',
  1 => '$counter = 2',
  2 => '$counter = 3',
  3 => '$counter = 4',
  4 => '$counter = 5',
)
$exit_code => 0
```

## [ShellExecExample.php](ShellExecExample.php)

Demonstrates [the `shell_exec()` function](https://www.php.net/manual/en/function.shell-exec.php). Notice that the results aren't shown until after the five seconds have elapsed.

```
$ php ShellExecExample.php

RESULTS:
$return => '$counter = 1
$counter = 2
$counter = 3
$counter = 4
$counter = 5
'
```

## [SystemExample.php](SystemExample.php)

Demonstrates [the `system()` function](https://www.php.net/manual/en/function.system.php). Notice how the output buffer is flushed with each new line.

```
$ php SystemExample.php

$counter = 1
$counter = 2
$counter = 3
$counter = 4
$counter = 5

RESULTS:
$return => '$counter = 5'
$exit_code => 0
```

## [PassthruExample.php](PassthruExample.php)

Demonstrates [the `passthru()` function](https://www.php.net/manual/en/function.passthru.php). Notice that (like system) the output buffer is flushed with each new line.

```
$ php PassthruExample.php

$counter = 1
$counter = 2
$counter = 3
$counter = 4
$counter = 5

RESULTS:
$return => NULL
```
