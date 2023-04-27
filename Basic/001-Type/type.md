## PHP data types ##
* **NULL:** The null type is PHP's unit type, i.e. it has only one value: null. Undefined, and unset() variables will resolve to the value null.  
* **BOOL:** The bool type only has two values, and is used to express a truth value. It can be either true or false.
* **INT:** An int is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}.
* **FLOAT:** Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using any of the following syntaxes:
* **STRING:** A string is a series of characters, where a character is the same as a byte. This means that PHP only supports a 256-character set.
* **ARRAY:** An array in PHP is actually an ordered map. A map is a type that associates values to keys.This type is optimized for several different uses; it can be treated as an array, list (vector), hash table (an implementation of a map), dictionary, collection, stack, queue, and probably more.
* **OBJECT**
* **CALLABLE**
* **RESOURCE:** A resource is a special variable, holding a reference to an external resource. Resources are created and used by special functions.

## Variable handling functions ##
* **isset()** - Determine if a variable is declared and is different than null
* **is_bool()** - Finds out whether a variable is a boolean
* **is_numeric()** - Finds whether a variable is a number or a numeric string
* **is_float()** - Finds whether the type of a variable is float
* **is_int()** - Find whether the type of a variable is integer
* **is_string()** - Find whether the type of a variable is string
* **is_object()** - Finds whether a variable is an object
* **is_array()** - Finds whether a variable is an array
* **is_iterable** — Verify that the contents of a variable is an iterable value
* **is_callable** — Verify that a value can be called as a function from the current scope.

**Converting to boolean**

|# Type                                     |#     Result          |
|-------------------------------------------|----------------------|
|Integer ```0``` or ```-0``` will evaluated | FALSE                |
|Floats ```0.0``` or ```-0.0``` will evaluated| FALSE              |
|Empty string like ```''``` will evaluated  | FALSE                |
|If 0 like string ```'0'``` will evaluated  | FALSE                |
|Empty array like ```[]``` will evaluted    | FALSE                |
|Spical type ```null``` will evaluted       | FALSE                |


**Converting to integer**

|# Type                                     |# Result               |
|-------------------------------------------|-----------------------|
|Boolean ```false``` will evaluated         |0                     |
|Boolean ```true``` will evaluated          |1                      |
|String ```null```  will evaluated          |0                     |
|NaN and Infinity will always               |0                     |
