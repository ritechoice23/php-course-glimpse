<?php

// Create simple string
$name= 'riteChoice';
$profession = 'software engineer';
// String concatenation
echo ($name . $profession);
// String functions
echo ('<hr>');
echo ('first letter of name to uppercase: '. ucfirst($name) .'<br>');
echo ('everything to uppercase: '. strtoupper($name) .'<br>');
echo ('everything to lowercase: '. strtolower($name) .'<br>');

$profession = str_replace('software','hardware',$profession);
echo (' replace software with another string: '.$profession .'<br>');
echo (' position of hardware: '.strpos($profession, 'hardware') .'<br>');
echo (' count a string: '.strlen($profession) .'<br>');

var_dump(explode(' ', $profession));
// Multiline text and line breaks

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php