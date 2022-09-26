<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/
// echo $_POST['age'];

if(isset($_POST['submit'])) {
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  
  $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
  
  echo $_POST['name'];

  }
?>

<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=aatmik">Click</a> -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
    <label for="name">Name</label>  
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">Age:</label>
    <input type="text" name="age">
  </div>
  <input type="submit" value="submit" name="submit">
</form>