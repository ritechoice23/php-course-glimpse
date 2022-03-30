<?php
// What is a variable

/*
 * a variable is a named container.
 * is a temporary storage in our programme
 */

// Declare variables
$temperature = 90.50;
$name = 'Elizabeth';
$age = 30;
$male = false;
$gender = "daddy's car";
// Print types of the variables
echo ('$temperature =>'.gettype($temperature).'<br>');
echo ('$age =>'.gettype($age) .'<br>');
echo ('$male =>'.gettype($male) .'<br>');
echo ('$gender =>'.gettype($gender) .'<br>');

// Data types
/*
 * string
 * boolean
 * float
 * double
 * integer
 * array
 * objects
 * null
 */

// Print the variables. 
echo ('age: '.$age .'<br>');
echo ('body temperature: '.$temperature .'<br>');

// Print the multiple variables
var_dump($temperature, $age, $name, $gender);
print_r($temperature);
// Change the value of the variable
echo ('age before: '.$age .'<br>');
$age = 12;
echo ('age after: '.$age .'<br>');

// check if variable is a particular type
$a = '1';
$b = 2;
var_dump (is_int($a));//boolean true or false
var_dump (is_string($a));//boolean true or false

// Check if variable is defined
$c = 2;
if (isset($c)) var_dump('response: ', $b+$c);
// Constants
define('PI', 22/7);
echo (round(2*PI*3**2 ));
// Using PHP built-in constants
