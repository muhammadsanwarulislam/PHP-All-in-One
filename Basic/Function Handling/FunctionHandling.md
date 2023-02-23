## Function Handling ##
* call_user_fun - ```call_user_func``` is a built-in function in PHP that allows you to call a callback function by name or by reference. A callback function is a function that can be passed as an argument to another function and can be called later within that function.
```
function my_callback_function($arg1, $arg2) {
    echo "Callback called with arguments $arg1 and $arg2";
}

// Call the callback function directly
my_callback_function('hello', 'world');

// Call the callback function using call_user_func
call_user_func('my_callback_function', 'hello', 'world');

```