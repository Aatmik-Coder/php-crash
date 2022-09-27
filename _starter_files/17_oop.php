<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

 class User {
  public $name;
  public $email;
  public $password;

  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }
}

$user1 = new User('mike','fasd@gmai.com','741258');
$user2 = new User('aatmik','fas@gfaf.com','85454');

echo $user1->name;

class Employee extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
      $this->title = $title;
  }

  public function get_title() {
    return $this->title;
  }
}

$employee1 = new Employee('mike', 'asdf@gmail','35465','leader');
echo $employee1->get_title();