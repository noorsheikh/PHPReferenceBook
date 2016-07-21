<?php

/*
*
* FUNCTIONS
* 
* Functions are used for organizing and grouping of
* statements of code in PHP.
*
*/

// A simple PHP Function
// Declare a function with keyword function
function welcome() {
	echo "Welcome to the world!<br>";
}


// Output the function to the screen
welcome();

/*
*
* Now we will mix Conditionals statement, Variable and
* Global variable with a Function
*
*/

// Declare a Variable
$name = 'Noor Sheikh';

// Declare a Function
function person() {
	// Declare a Global variable to call $name variable inside the function
	global $name;

	// Declare a Conditional if to check whether the $name is correct or not
	if ($name == 'Noor Sheikh') {
		echo "You are right he is " . $name . ".<br>";
	} else {
		echo "You are wrong he is not Noor Sheikh.<br>";
	}
}


// Call the function to output its result to the screen
person();
?>