<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
// $x = 10;
// function registerUser($email) {
//   echo $email.' registered';
// }

// registerUser('aatmik');

function sum($n1 = 4, $n2 = 5) {
  return $n1 + $n2;
}

echo sum();

echo '<br>';

$substract = fn($n1, $n2) => $n1 - $n2;

echo $substract(5, 4);
