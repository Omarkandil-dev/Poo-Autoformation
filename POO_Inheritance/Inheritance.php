<?php
class student {
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function student() {
    echo "he 's : {$this->name} and him age : {$this->age}.";
    
  }

}

// Groupes is inherited from student
class Groupes extends student {
  public function message() {
    echo "who is id:2? <br>";
  }
}
$test = new Groupes("Omar", 19);
$test->message();
$test->student();
?>