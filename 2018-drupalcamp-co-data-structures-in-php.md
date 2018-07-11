DS GitHub - https://github.com/php-ds/extension 
- An extension providing specialized data structures as efficient alternatives to the PHP array.

What are data structures? - https://en.wikipedia.org/wiki/Data_structure
- In computer science, a data structure is a data organization and storage format that **enables efficient access and modification**.[1][2][3] More precisely, a data structure is a collection of data values, the relationships among them, and the functions or operations that can be applied to the data.
- Arrays in PHP aren't effcient for everything developers use them for.

Go over primitive/scalar types
https://stackoverflow.com/questions/6623130/scalar-vs-primitive-data-type-are-they-the-same-thing/6628566

Scalars are typically contrasted with compounds, such as arrays, maps, sets, structs, etc. A scalar is a "single" value - integer, boolean, perhaps a string - while a compound is made up of multiple scalars (and possibly references to other compounds). "Scalar" is used in contexts where the relevant distinction is between single/simple/atomic values and compound values.

Primitive types, however, are contrasted with e.g. reference types, and are used when the relevant distinction is "Is this directly a value, or is it a reference to something that contains the real value?", as in Java's primitive types vs. references. I see this as a somewhat lower-level distinction than scalar/compound, but not quite.

List the PHP types - http://php.net/manual/en/language.types.intro.php
- T

How to cast variables to ensure the type - http://php.net/manual/en/language.types.type-juggling.php#language.types.typecasting

Go over strict vs. dynamic languages and imutability.
- G

Converting to an array - http://php.net/manual/en/language.types.array.php#language.types.array.casting
- G

Introduce PHP Storm plugin - https://github.com/kalessil/phpinspectionsea
- weak types control and possible code construct simplifications
- can read https://github.com/kalessil/phpinspectionsea/search?q=type&unscoped_q=type to learn more

Example:
```php
$foop = g();
//$foop = (array) g();
//$foop = array(g());

//if (is_array($foop)) {
//if (gettype($foop) === 'array') {
  foreach ($foop as $f) {
    $g = 'g';
  }
//}

// foreach (array($arr) as $item) {
foreach ((array) $arr as $item) {

}
```

Contrast to JS - https://developer.mozilla.org/en-US/docs/Web/JavaScript/Data_structures
- Six primitive types and the object
- New Symbol type - A Symbol is a unique and immutable primitive value and may be used as the key of an Object property (see below). In some programming languages, Symbols are called atoms.
- has standard objects - https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects
- Keyed collections - Map and Set

PHP Array - http://php.net/manual/en/language.types.array.php 
- An array in PHP is actually an ordered map.
- This type is optimized for several different uses; it can be treated as an array, list (vector), hash table (an implementation of a map), dictionary, collection, stack, queue, **and probably more**.

PHP difference - Pseudo data types http://php.net/manual/en/language.pseudo-types.php

New stuff in PHP 7...
- Used for documentation to improve readability.
- @return array|boolean vs. @return mixed

Why the DS extenstion exists?
- PHP 7 had a lot of fanfare and the array was refactored but still was at least 7 data types combined.
- The SPL data types are cumbersome and “SPL data structures are horribly designed.” — Anthony Ferrara - http://php.net/manual/en/spl.datastructures.php

Why you should use the DS extension?
- You can talk shop better with other devs that use languages with more defined primitive and scalar types.
- You will start to think more about the variables you are creating and what they need to do. Other devs can easily see this.
- Your IDE can hint at the methods available. No more needle/haystack or is it haystack/needle. After programming in JS for a little while, I missed my IDE helping me out here.

