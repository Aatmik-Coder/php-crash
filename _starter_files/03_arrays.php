<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$numbers = [1, 2, 3, 4, 5];
$fruits = array('apple','orange', 'pear');

// echo $fruits[0];

$colors = [
  [
    1 =>'red',
    4 => 'blue',
    6 => 'green'
  ],
  [
    'first_name'=>'mike',
    'last_name'=>'sanghvi'
  ],
  [
    'first_name'=>'yash',
    'last_name'=>'sanghvi'
  ]
];

var_dump(json_encode($colors));