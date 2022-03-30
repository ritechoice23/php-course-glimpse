<?php

// Declaring numbers
$a = 50;
$b = 60;
$c = 70;

// Arithmetic operations
//+	Addition	$a + $b	Sum of $a and $b
echo ('Addition: '. $a + $b .'<br>');
//-	Subtraction	$a - $b	Difference of $a and $b
echo ('Subtraction: '. $a - $b .'<br>');

//*	Multiplication	$a * $b	Product of $a and $b
echo ('Multiplication: '. $a * $b .'<br>');

///	Division	$a / $b	Quotient of $a and $b
echo ('Division: '. $a / $b .'<br>');

//%	Modulus	$a % $b	Remainder of $a divided bb $b
echo ('Modulus: '. $a % $b .'<br>');

//**	Exponentiation	$a ** $b	Result of raising $a to the $b'th power
echo ('Exponentiation: '. $a ** $b .'<br>');

// Assignment with math operators
//a = b	a = b	The left operand gets set to the value of the eapression on the right	
echo ('<hr>');
echo ('$a before: '. $a .'<br>');
$a = $b;
echo ('$b before: '. $b .'<br>');
echo ('$a now: '. $a .'<br>');
//a += b	a = a + b	Addition	
$a += $b;
echo ('<hr>');
echo ('$a: '. $a .'<br>');
//a -= b	a = a - b	Subtraction	
//a *= b	a = a * b	Multiplication	
//a /= b	a = a / b	Division	
//a %= b	a = a % b	Modulus
// Increment operator
echo ('<hr>');
echo ('$a: '. $a++ .'<br>'); // increase a by one
// Decrement operator
echo ('<hr>');
echo ('$a: '. $a-- .'<br>'); // increase a by one
// Number type checking functions
echo ('<hr>');
echo ('$a: '. gettype($a) .'<br>'); // increase a by one
// Conversion

// Number functions
abs($a);
// Formatting numbers

// https://www.php.net/manual/en/ref.math.php
