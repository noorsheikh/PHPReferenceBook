<?php

/*
*
* PHP also provide a lot of Built In Function for its users
* In this script we will cover some PHP built in functions and their usage
*
*/

// Declare a local variable
$full_name = "Noor Mohammad Sheikh";

echo "String Full Name = " . $full_name . "<br>";

// PHP Built In strpos() function
// This function is used to locate the position of a string
$string_position = strpos($full_name, "Mohammad");

echo "String Mohammad's Position = " . $string_position . "<br>";

// PHP Built In strlen() function
// This function is used for counting the length of a given string
$string_length = strlen($full_name);

echo "String Length = " . $string_length . "<br>";

// PHP Built In substr() function
// This function is used to show the substring of a string
$sub_string = substr($full_name, 5, 15wwwwww);

echo "Sub String = " . $sub_string . "<br>";
?>