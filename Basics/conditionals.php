<?php
// Conditionals
/*
*
* Here we will use the IF ELSE conditional statements
* First of all we will initialize some variables and
* Define some constant variables too.
*
* In this snipt of code we will check the rules of
* voting eligibility for each individual
*
*/

// Define a constant variable for age
define('AGE', 18);

// Define some variables for three people to check thier
// eligibility of voting
$name1 = "Ahmad";
$age1 =12;

$name2 = "Waheed";
$age2 = 15;

$name3 = "Mohammad";
$age3 = 65;

/* 
*
* We will check wether Ahmad can vote or not
* The voting eligibility age is 18 or above
* So we will state a conditionl to check the
* eligibility of voting for Ahmad
*
*/

// We will use IF ELSE conditional in order to check the eligibility of Ahmad for voting
if ($age1 >= AGE ) {
	echo $name1 . " is eligibal to vote. <br>";
} else {

	echo $name1 . " is not eligibal to vote because his age is " . $age1 . " and he is considered underage. He should become " . AGE . " in order to vote in the election. <br>";
}


// Here we will work on IF, ELSEIF and ELSE statements
// In this part we will create a grading snipt in order to check the grade for a students in his Programming class

// First we will declare a constant marks for the student
define('MARKS', 90);

// Second we decalare a student variable and initialize it with student name
$student = "Abdullah";

// We will also decalre a variable for the subject
$subject = "Programming";

// Now we will check the student marks and assigned a grade based on his marks
if (MARKS >= 90 and MARKS <=100) {
	echo $student . " got an A grade in his " . $subject . " class. EXCELLENT!";
} elseif (MARKS >= 80 AND MARKS < 90) {
	echo $student . " got a B grade in his " . $subject . " class. GOOD!";
} elseif (MARKS >= 70 AND MARKS < 80) {

	echo $student . " got a C grade in his " . $subject . " class. FAIR!";
} elseif (MARKS >= 60 AND MARKS < 70) {
	echo $student . " got a D grade in his " . $subject . " class POOR!";
} elseif (MARKS >= 0 AND MARKS < 60) {
	echo $student . " got F in his " . $subject . " class. It shows that he is fail and he have to retake this class. SHAME ON YOU!";
} else {
	echo MARKS . " is not valid marks. SORRY!!!";
}

?>