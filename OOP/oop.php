<?php 

class Student {
    public $student__name;
    public $student__class;
    public $student__age;

    function __contain($name, $class, $age){
        $this->student__name = $name;
        $this->student__class = $class;
        $this->student__age = $age;
        echo $this->student__name;
    }

    function getName($name){
        $this->student__name = $name;

        // print($this->student__name);
    }
    function getClass(){
        echo $this->student__class;
    }
    function getAge(){
        echo $this->student__age;
    }

    function getDetails(){
        __contain();
        getName();
        getClass();
        getAge();
    }


}


$st__1 = new Student('Ahmed', 9, 15);
echo 'Hello';
$st__1 -> getAge();


?>