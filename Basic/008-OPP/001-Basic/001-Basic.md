## The Basics ##

**class**

Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class.

The class name can be any valid label, provided it is not a PHP reserved word. A valid class name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. As a regular expression, it would be expressed thus: ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$.

**A class may contain its own constants, variables (called "properties"), and functions (called "methods").**

```
<?php
class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}
?>
```
**The pseudo-variable $this is available when a method is called from within an object context. $this is the value of the calling object.**

**Readonly classes**
As of PHP 8.2.0, a class can be marked with the readonly modifier. Marking a class as readonly will add the readonly modifier to every declared property, and prevent the creation of dynamic properties. Moreover, it is impossible to add support for them by using the AllowDynamicProperties attribute. Attempting to do so will trigger a compile-time error.