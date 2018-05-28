# PHP CLI Examples

This repository contains several sample PHP CLI scripts to accompany my talk, [_Building for the PHP Command Line Interface_](https://github.com/stevegrunwell/building-for-php-cli).


## Installation

To install these samples locally, please start by installing their dependencies via [Composer](https://getcomposer.org/):

```sh
$ composer install
```

## Examples

### Globals

*Global variables defined within PHP.*

#### [`$argc`](http://php.net/manual/en/reserved.variables.argc.php) and [`$argv`](http://php.net/manual/en/reserved.variables.argv.php)

The argument **count** and **values**, respectively, that have been passed to PHP.

The script name is treated as an argument, so `$argc` should never be < 1 nor should `$argv` ever be empty.

```sh
$ php examples/ArgExample.php abc 123
```


### PHP Functions

*Demonstrations of calling native PHP functions in CLI scripts.*


#### [`exec()`](http://us3.php.net/manual/en/function.exec.php)

Call an external program and returns the last line of its output.

```sh
$ php examples/ExecExample.php
```

#### [`shell_exec()`](http://us3.php.net/manual/en/function.shell-exec.php)

Call an external program and returns its full output as a string.

```sh
$ php examples/ShellExecExample.php
```

#### [`system()`](http://us3.php.net/manual/en/function.system.php)

Executes a given command and outputs the result, attempting to flush the output buffer with each line.

```sh
$ php examples/SystemExample.php
```

#### [`passthru()`](http://us3.php.net/manual/en/function.passthru.php)

Like `exec()` or `system()`, `passthru()` executes a given command and outputs the result, but the output is not altered in any way, which makes it better suited for things like binary file operations.

```sh
$ php examples/PassthruExample.php
```


#### [`getenv()`](http://us3.php.net/manual/en/function.get.php) and [`putenv()`](http://us3.php.net/manual/en/function.putenv.php)

Retrieve and set system environment variables.

```sh
# The script will read DEMO_NAME and recognize you.
$ export DEMO_NAME="Steve"
$ php examples/EnvExample.php

# Unset DEMO_NAME for a different behavior.
$ unset DEMO_NAME
$ php examples/EnvExample.php
```

#### [`exit`](http://us3.php.net/manual/en/function.exit.php)

Demonstrates exit codes within PHP.

> **Note:** Technically, `exit` is a language construct, not a function, though it operates much like one.

```sh
# Exit with a code of 0 (success) and continue to echo 'Success!';
$ php examples/ExitCodeExample.php && echo "Success"

# Exit with a non-zero status code to break the chain.
$ php examples/ExitCodeExample.php 123 && echo "You should never see this"
```


### Libraries and Frameworks

*Simple programs built using third-party tools.*


#### Symfony Console Component

A simple example of a [Symfony Console command](http://symfony.com/doc/current/components/console/) that accepts user output and demonstrates output.

```sh
$ php examples/SymfonyExample.php symfony-example Steve
```

#### PHP-CLI Tools

Uses [PHP-CLI Tools'](https://github.com/wp-cli/php-cli-tools) `cli\prompt()` and `cli\choose()` helpers to collect user input, then displays output using `cli\line()`.

```sh
$ php examples/PHPCliToolsExample.php
```

#### WP-CLI

A trivial [WP-CLI command](http://wp-cli.org/) that accepts a user login and displays the latest posts from that user.

As WP-CLI requires a WordPress environment, you'll need to copy the example file into WordPress:

```sh
$ cp examples/WPCLIExample.php /path/to/wordpress/wp-content/wp-cli-example.php
$ cd /path/to/wordpress
$ wp --require=wp-content/example-command.php example-command latest-posts-by-user admin
```


## License

The MIT License (MIT)
Copyright (c) 2016 Steve Grunwell

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
