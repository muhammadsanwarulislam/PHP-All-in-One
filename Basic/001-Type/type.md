## PHP data types ##
* NULL
* BOOL
* INT
* FLOAT
* STRING
* ARRAY
* OBJECT
* CALLABLE
* RESOURCE

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

**Evaluations**

|# Type                                     |#     Result          |
|-------------------------------------------|----------------------|
|Integer ```0``` or ```-0``` will evaluated | FALSE                |
|Floats ```0.0``` or ```-0.0``` will evaluated| FALSE              |
|Empty string like ```''``` will evaluated  | FALSE                |
|If 0 like string ```'0'``` will evaluated  | FALSE                |
|Empty array like ```[]``` will evaluted    | FALSE                |
|Spical type ```null``` will evaluted       | FALSE                |


