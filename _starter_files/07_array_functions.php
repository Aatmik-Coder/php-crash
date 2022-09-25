<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple','orange','pear'];

// echo count($fruits);

// var_dump(in_array('apples',$fruits));

$fruits[] = 'grape';


array_push($fruits, 'mango');
array_unshift($fruits, 'kiwi');
array_pop($fruits);

$chunked_array = array_chunk($fruits, 3);

// print_r($chunked_array);

// $arr1 = [1,2,3];
// $arr2 = [4,5,6];

// $arr3 = array_merge($arr1, $arr2);

// $arr4 = [...$arr1, ...$arr2];

// print_r($arr4);

$numbers = range(1, 20);

// print_r($numbers);

$newNumbers = array_map(function($number) {
  return "Number ${number}";
},$numbers);

// print_r($newNumbers);

$lessThan5 = array_filter($numbers, fn($number) => $number <= 5);
// print_r($lessThan5);

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

// print_r($sum);
