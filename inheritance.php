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
 class Cricketer extends Player{
    private $centuries;

    public function __construct($name, $age, $centuries){

        parent::__construct($name,$age);
        $this->centuries = $centuries;
    }
 }

 class Footballer extends Player{

    private $goals;

    public function __construct($name,$age, $goals){

        parent::__construct($name,$age);
        $this->goals = $goals;
    }
 }

 //create object
 $cricketer = new Cricketer("Tamim",35,12);
 $footballer = new Footballer("Naymer Jr",32,100);

 echo $cricketer->getPlayerDetails();
 echo $footballer->getPlayerDetails();



?>