
<?php 

    class Student {
        public $name;
        public $age;

        function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }

        function get_name(){
            return $this->name;
        }
        function get_age(){
            return $this->age;
        }

    }
    $student = new Student('Omar', 19);
    echo 'Name : ' . $student->get_name();
    echo '<br/>';
    echo 'Age : '. $student->get_age();
    

?>