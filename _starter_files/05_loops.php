<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for($x = 0; $x < 10; $x++) {
  // echo $x . '<br>';
}


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
$a = 1;
while ($a <= 10) {
  # code...
  echo $a.'<br>';
  $a++;
}

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
$x = 1;

do{
  echo 'Number '. $x.'<br>';
  $x++;
}while($x <= 5);


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
$x = ['adf', 'dfasd', 'fasd'];
foreach($x as $index => $xx) {
  echo $index.' ';
}
