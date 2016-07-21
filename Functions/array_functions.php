<?php

/*
*
* Array Functions in PHP
* Array Functions is used to print the data from an array through function
* There are two types of Array Functions
* array_keys() and array_walk()
* We will be covering both of them in this scrip
*
*/

// First declare a simple array here
$user_profile = array(
	'Noor Sheikh' => 'System Developer',
	'0788815569' => 'nsheikh@checchiconsulting.com',
	'Bagrami District' => 'Kabul, Afghanistan'	
);

// Usage of array_keys() function
// array_keys() function is used for extracting out the keys of an array
$keys = array_keys($user_profile);
echo "<ul>";
// loop keys by using foreach loop
foreach($keys as $key) {
	echo "<li>" . $key . "</li>";
}
echo "</ul>";

// Usage of array_walk() function
// array_walk() function is used to loop through array keys and values through a custom function

// First declare a function with passing two arguments to it for values and keys
function valueKey($value, $key) {
	echo "$key, $value. <br>";
}

// Use array_walk() function to loop both keys and values
array_walk($user_profile, 'valueKey');
?>