# Argument Handling

This directory contains examples of handling arguments passed to PHP scripts.

## [ArgcArgv.php](ArgcArgv.php)

This script demonstrates the [`$argc`](https://www.php.net/manual/en/reserved.variables.argc.php) and [`$argv`](https://www.php.net/manual/en/reserved.variables.argv.php) globals, available when using the CLI PHP SAPI.

Remember, `$argc` is the argument **count** while `$argv` contains the value(s) of the argument(s). The script name itself is considered an argument, but these should never be zero or empty, respectively!

```
$ php ArgcArgv.php abc 123
There were 3 argument(s) passed to PHP:
Array
(
    [0] => examples/ArgExample.php
    [1] => abc
    [2] => 123
)
```

## [Getopt.php](Getopt.php)

This script demonstrates the behavior of PHP's `getopt()` function and accepts three short arguments and three long arguments:

```none
-r|--required   This option must have a value.
-o|--optional   This option may or may not have a value.
-b|--boolean    This option must not have a value.
```

Notice how `getopt()` can handle a few conventions for passing args; any of the following will produce the same results:

```sh
# Spaces between the options and values
$ php Getopt.php -r "-r value" --required "--required value"
This is what getopt() parsed out of your call:

	-r: '-r value'
	--required: '--required value'

# Equal signs between the options and values
$ php Getopt.php -r="-r value" --required="--required value"
This is what getopt() parsed out of your call:

	-r: '-r value'
	--required: '--required value'
```

However, the same cannot be said for **nothing** between option and value:

```sh
# No spaces between the options and values
php Getopt.php -r"-r value" --required"--required value"
This is what getopt() parsed out of your call:

	-r: '-r value'
```

When dealing with optional values, spaces cannot exist between the short option and value:

```sh
# Equal sign between options and values
php Getopt.php -o="-o value" --optional="-optional value"
This is what getopt() parsed out of your call:

	-o: '-o value'
	--optional: '-optional value'

# Space between the option and value
php Getopt.php -o "-o value" --optional "-optional value"
This is what getopt() parsed out of your call:

	-o: array (
  0 => false,
  1 => ' value',
  2 => 'ptional value',
)
	--optional: false

# No space between the options and values
$ php Getopt.php -o"-o value" --optional"-optional value"
This is what getopt() parsed out of your call:

	-o: '-o value'
```

When values are not passed, the value will be interpreted as `false`; the presence of the array key in the `$opts` array is how we determine if the option was passed:

```sh
$ php Getopt.php -o -b --optional
This is what getopt() parsed out of your call:

	-o: false
	-b: false
	--optional: false
```

Short options can be combined, but any option that accepts a value must be at the end of the list:
 `-ob` is treated as `-o=b`, not `-o -b`:

```sh
# -ob is treated as -o=b
$ php Getopt.php -ob
This is what getopt() parsed out of your call:

	-o: 'b'

# -bo is treated as -b -o
$ php Getopt.php -bo
This is what getopt() parsed out of your call:

	-b: false
	-o: false
```

Additionally, if a value is passed to an argument that does not accept a value, all subsequent options will be skipped:

```sh
php Getopt.php --required value1 --boolean value2 --optional value3
This is what getopt() parsed out of your call:

	--required: 'value1'
	--boolean: false

Stopped parsing after 'value2'
```
