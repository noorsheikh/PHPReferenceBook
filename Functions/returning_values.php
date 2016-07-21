<?php

/*
*
* Returning Values with PHP Functions
* Instead of echoing result inside function we can also return value inside function
*
*/

// Returning a simple variable through return method in function keyword
function person($name) {
	return $name . "<br>";
}

// Output of the person function
echo person('Noor Sheikh');

// Returning a numerical value through return function keyword
function add_result($a, $b) {
	return $a + $b . "<br>";
}

// Output of the add_result function
echo add_result(3, 7);


// Returning array through return function keyword
function return_array($a, $b) {
	$arr = array(
		$a,
		$b,
		$a + $b
	);
	return $arr;
}

// Output the return_array function
$value = return_array(12, 14);

echo $value[2];


// Note: We can only return only one return statement inside a function

?>