Go over primitive/scalar types
https://stackoverflow.com/questions/6623130/scalar-vs-primitive-data-type-are-they-the-same-thing/6628566

Scalars are typically contrasted with compounds, such as arrays, maps, sets, structs, etc. A scalar is a "single" value - integer, boolean, perhaps a string - while a compound is made up of multiple scalars (and possibly references to other compounds). "Scalar" is used in contexts where the relevant distinction is between single/simple/atomic values and compound values.

Primitive types, however, are contrasted with e.g. reference types, and are used when the relevant distinction is "Is this directly a value, or is it a reference to something that contains the real value?", as in Java's primitive types vs. references. I see this as a somewhat lower-level distinction than scalar/compound, but not quite.

PHP Types Doc
http://php.net/manual/en/language.types.intro.php

List the types…

How to cast variables to ensure the type - http://php.net/manual/en/language.types.type-juggling.php#language.types.typecasting


Converting to an array - http://php.net/manual/en/language.types.array.php#language.types.array.casting

Example:
```php
    $foop = g();
//  $foop = (array) g();
//  $foop = array(g());

  foreach ($foop as $f) {
    $g = 'g';
  }
```
