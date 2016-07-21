<?php

/*
*
* Closuers
* We can use closures to assign a function to a variable instead of writing function with its function name.
*
*/

// Declare global variables outside of a function
// We will be including these variables inside the $person function
$name = "Noor Sheikh";
$age = 27;
$gender = "Male";

// Declare a variable and assign a function to it
$person = function() use($name, $age, $gender) {
	echo "He is Mr. $name. He is $age years old and he is a $gender.";
};

//
$person();
?>