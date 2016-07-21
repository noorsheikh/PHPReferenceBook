<?php

/*
*
* Variable Functions
* We can also call functions through variables.
* For this first we need to create a function and for calling the function we need
* to declare a variable with the value exactly as the function name
* and then we can use the paranthesis with the variable name to echo the function as shown below in the code.
*/

// Declare a function with three arguments and return the sum of them
function add($a, $b, $c) {
	return $a + $b + $c;
}

// Output the function through variable
$func = "add";
echo $func(1, 2, 3);


?>