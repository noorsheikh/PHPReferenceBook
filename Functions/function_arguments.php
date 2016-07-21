<?php

/*
*
* FUNCTION ARGUMENTS
* We can pass variables to the Functions through
* inserting variable arguments inside the parenthesis
* after giving the function name
*
*/

// Declare a Function with Argument passed to it
function person($name) {
	echo "Hello everyone, this is " . $name . ".<br>";
}

// Output the person function to the screen with $name value passed to the function
person('Noor Sheikh');

/*
*
* We can also pass an array as an argument to a
* PHP Function I will show the example if it to you
* in the below snipt of code
*
*/

// Declare a Function and pass an array as an argument
function people($array_list) {
	// Check the argument whether it is array or not through an if condition
	if (is_array($array_list)) {
		// If the argument was array then loop through each array item by using foreach loop
		foreach ($array_list as $name) {
			echo "Hello " . $name . ", how are you dear!<br>";
		}
	} else {
		echo "Hello Dear!<br>";
	}
}

// Declare an array with name provided in it.
$names = array('Ahmad', 'Ali', 'Sajid', 'Wasim');

// Output the people function the screen
people($names);

?>