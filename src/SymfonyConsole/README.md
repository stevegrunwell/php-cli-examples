# Symfony Console

This directory contains an example [Symfony Console](https://symfony.com/doc/current/components/console.html) application with two commands, which you may interact with it by running the `App.php` file.

## [HelloThereCommand.php](HelloThereCommand.php)

A simple greeter script.

```
$ php App.php hello-there Steve
Symfony says "hello", Steve!
```

If you don't provide a name, the command will fail:

```
$ php App.php hello-there

  Not enough arguments (missing: "name").

hello-there <name>
```

You may also see all commands registered within the app and see how to use them:

```
$ php App.php
Console Tool

Usage:
  command [options] [arguments]

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  completion   Dump the shell completion script
  hello-there  Greet a user by name.
  help         Display help for a command
  list         List commands

$ php App.php hello-there --help
Description:
  Greet a user by name.

Usage:
  hello-there <name>

Arguments:
  name                  The name of the user

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

## [ShowOffCommand.php](ShowOffCommand.php)

This command demonstrates some of [the input and output options available via Symfony Console](https://symfony.com/doc/current/console/style.html):

```
$ php App.php show-off
```
