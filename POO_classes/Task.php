<?php 
class Student{

    public $name; 
    public $age;

    public function set_name($name) {
        $this->name = $name;
    }
    public function get_name() {
        return $this->name;
    }

    public function set_age($age) {
        $this->age = $age;
    }

    public function get_age() {
        return $this->age;
    }
}

    $student = new Student();
    $student->set_name('Omar');
    $student->set_age(19);

    echo "Name :" .$student->get_name();
    echo "<br>";
    echo "Age : " .$student->get_age();

?>