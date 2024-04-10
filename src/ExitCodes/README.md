# Exit Codes

This directory contains a script demonstrating how exit codes work.

> **Note:** Technically, `exit` is a language construct, not a function, though it operates much like one.

## [ExitCodeExample.php](ExitCodeExample.php)

Passing any arguments will cause the script to exit with an exit code of 1, which can be used to demonstrate boolean operators:

```
$ php examples/ExitCodeExample.php && echo 'This ran successfully'
Exiting with a code of 0
This ran successfully

$ php examples/ExitCodeExample.php abc || echo 'Something went wrong'
Exiting with a code of 1
Something went wrong
```

You may also verify the exit code via `echo $?`:

```
$ php examples/ExitCodeExample.php abc; echo $?
Exiting with a code of 1
1
```
