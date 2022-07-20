<?php

Class Suspect{
    public $suspect__name;
    public $suspect__address;
    public $suspect__race;
    public $suspect__fireArm;


    function __contain($name, $address, $race, $fireArm){
        $this->suspect__name = $name;
        $this->suspect__address = $address; 
        $this->suspect__race = $race; 
        $this->suspect__fireArm = $fireArm; 

        echo $this->suspect__name;
    }


    function get__details(){
        echo $this->suspect__name . '<br/>';
        echo $this->suspect__address . '<br/>';
        echo $this->suspect__race . '<br/>';
        if($this->suspect__fireArm == true){
            echo 'Be Alert, The suspect is armed';
        } else{
            echo 'The suspect does not seem to be armed';
        }
    }

}


$sus__1 = new Suspect('Ahmed', 'A-135, Block-5, Gulzar-e-Hijri', 'Brown', true);

?>