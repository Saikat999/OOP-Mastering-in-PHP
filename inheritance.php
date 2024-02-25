<?php 
  
class Player{

    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function getPlayerDetails(){
        echo $this->name. " is ".$this->age." years old\n";
    }
}
// Child class Cricketer inherite the parent class Player 
class Cricketer extends Player{
    private $centuries;

    public function __construct($name, $age, $centuries){

        parent::__construct($name,$age); // call the properties of parents class
        $this->centuries = $centuries;
    }
 }

 
 // Child class Footballer inherite the parent class Player 
 class Footballer extends Player{

    private $goals;

    public function __construct($name,$age, $goals){

        parent::__construct($name,$age);  // call the properties of parent class 
        $this->goals = $goals;
    }
 }

 //create objects
 $cricketer = new Cricketer("Tamim",35,12); //Create cricketer object
 $footballer = new Footballer("Naymer Jr",32,100); //Create footballer object

 echo $cricketer->getPlayerDetails();
 echo $footballer->getPlayerDetails();



?>