
<?php 
class Student {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function __destruct()
    {
        echo "My name is : {$this->name} & My age is {$this->age} ";
    }
}

$student = new Student ('Omar' , 19);