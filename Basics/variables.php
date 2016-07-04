<?php
/*
*
* VARIABLES
* Variables are used in PHP for storing data
* In PHP variables declaration starts with $ sign followed by aplhabet or underscore
* It cannot start with numerical character
* Variables can only have alphabet, numbers and underscores
* Variables cannot contain special characters such as !@#$%^&* etc.
* Variable names are case sensitive such as $name and $NAME are two different variable names
*
*
* --------------------------
* PHP variables can store
* text, numbers, arrays, decimal values, true/false values etc.
*
* ------------------------------------
* There are total of 7 data types in PHP.
* Following data types are supported by PHP variables:
* Strings
* Integers
* Floats
* Booleans
* Arrays
* Object
* Resource
*
*/

// String declaration
/*
* We can wrap the text or String variable 
* either inside a double quote "" or inside 
* a single quote '' as shown below in the code
*
*/
$statement1 = "Hi, How are you?";
$statement2 = 'I am fine thnx!';

/*
* With echo statement we can present the value 
* inside a variable to the viewers
*
*/ 
echo $statement1;
echo $statement2;


// Integer declaration
/*
* For declaring Integer we done need to use
* any single or duble quotes
* We just need to write the numerical values
* after the variable name and equal signs
*
*/
$int = 25;

/*
* Here we will echo the Integer that 
* we declared inside $int variable
*/
echo $int;

// Through gettype() we can get the data type of a variable
echo gettype($int);


$price = 5.4;
$tax = 1.0;

echo $price - $tax;

// Boolean Declaration
$boolean = TRUE;
// var_dump($boolean);

// All of the below values are false
var_dump((boolean) "");
var_dump((boolean) 0);
var_dump((boolean) 0.0);
var_dump((boolean) array());

// All of the below values are true
var_dump((boolean) "Hi");
var_dump((boolean) 1);
var_dump((boolean) 1.0);
var_dump((boolean) -1);


// CONSTANTS
define("NAME", "Noor Sheikh");
echo NAME;


?>