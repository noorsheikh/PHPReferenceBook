<?php
/*
*
* Loops
* In this section we will work on loops
* We will use two types of loops FOR loop and FOREACH loop
*
*/

// FOR loop
/*
*
* In this first section we will work on FOR loop
* FOR loop is used to run a block of code for a defined time
*
*/

// We will declare our FOR loop as shown below
for ($start = 0; $start <= 20; $start++) {
	echo $start . "<br>";
}

/*
*
* The code above first declare a for loop and then pass three statements as parameters. First statement initialze
* a starting point of the loop variable. Second statement set the target for the loop and the third statement stop the 
* loop by increment it first statement to make the second statement stop.
*
*/

// FOREACH loop
/*
*
* FOREACH loop is used to loop through a set of sepcified data in a form of array 
* or loop through a data from a database table
* In this snipt of code for FOREACH we will loop through an array and list all of the array data in to a list
*/

// First of all we will declar an array for weekdays
$weekdays = array("Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");

// Now we will loop through the weekdays and list the in a ul element of html
echo "<ul>";
foreach ($weekdays as $day) {
	echo "<li>" . $day . "</li>";
}
echo "</ul>";
?>