# Working with Environment Variables

This example demonstrates how environment variables can be set and retrieved via PHP scripts via [`getenv()`](https://www.php.net/manual/en/function.getenv.php) and [`putenv()`](https://www.php.net/manual/en/function.putenv.php).

```
$ ANIMAL=dog php EnvExample.php
The dog goes "woof!"

ANIMAL=<empty>
ANIMAL_SOUND=woof!

$ ANIMAL=fox php EnvExample.php
I don't know what sound the fox makes!

ANIMAL=fox
ANIMAL_SOUND=unknown
```
