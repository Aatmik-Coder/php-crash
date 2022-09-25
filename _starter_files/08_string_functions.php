<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = "Hello World";

echo strlen($string);

echo strpos($string, 'o');

echo strrpos($string, 'o');

echo strrev($string);

echo strtolower($string);

echo strtoupper($string);

echo ucwords($string);

echo str_replace('World', 'Everyone', $string);

echo substr($string, 0, 5);

echo substr($string, 5);