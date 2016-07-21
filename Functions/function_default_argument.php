<?php

/*
*
* FUNCTION ARGUMENTS with Default Values
* We can pass variables to the Functions through
* inserting variable arguments inside the parenthesis
* after giving the function name, we can also give
* default variables to these arguments
*
*/

// Declare a Function with Arguments passed to it
function person($name, $age = Null) {
	// As we have create our $age variable as optional here we will create an if condition to check whether a value is passed to age variable or not
	if ($age) {
		// If value is passed then we will also get the value of age here.
		echo "He is " . $name . " and he is " . $age . " years old.<br>";
	} else {
		// If age is not passed then we will simply output the name variable alone.
		echo "He is " . $name . ".<br>";
	}
}

// Output the person function to the screen with $name value passed to the function
person('Noor Sheikh', 27);

?>