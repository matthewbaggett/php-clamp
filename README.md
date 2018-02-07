# Clamp() for PHP
PHP mathematical "Clamp" function. It clamps a variable between two numbers. Simple.

[![Build Status](https://travis-ci.org/matthewbaggett/php-clamp.svg?branch=v1.0)](https://travis-ci.org/matthewbaggett/php-clamp)
## Usage:
```php
    $value = clamp(
        $min,  // The minimum you will accept
        $max,  // The maximum you can take
        $value // The value you wish to clamp
    );
```

## Why?
I got sick of writing what should be a core PHP function into a Util class, only to 
discover other people populating that util class with other nonsense that really 
shouldn't be in a Util class.