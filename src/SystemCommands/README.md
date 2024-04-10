# System Commands

This directory contains scripts demonstrating the various ways that PHP can execute other system commands.

## [ExecExample.php](ExecExample.php)

Demonstrates [the `exec()` function](https://www.php.net/manual/en/function.exec.php) by trying to call `which phpcs`, determining whether or not the PHP_CodeSniffer binary is in your path.

```
$ php examples/ExecExample.php
Running `exec('which phpcs')`...
PHP_CodeSniffer was not found in your path.
```

## [PassthruExample.php](PassthruExample.php)

