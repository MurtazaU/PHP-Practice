<?php

class Student{
    public $student__name;
    public $student__class;
    public $student__marks;


    function __construct($name, $class, $marks){
        $this->student__name = $name;
        $this->student__class = $class;
        $this->student__marks = $marks;

    }

    function getDetails(){
        echo $this->student__name . '<br/>';
        echo $this->student__class . '<br/>';
        echo $this->student__marks . '<br/>';
    }
}


$student__1 = new Student('Ahmed', 8, 86);
$student__1->getDetails();




?>