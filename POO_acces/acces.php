<?php
class Student {
  public $name;
  public $age;

  function set_name($name) {  // a public function (default)
    $this->name = $name;
  }
  protected function set_age($age) { // a protected function
    $this->age = $age;
  }
}

$student = new Student();
$student->set_name('Omar'); // OK
$student->set_age('19'); // ERROR
?>