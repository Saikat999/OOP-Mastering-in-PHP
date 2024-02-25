<?php
class Player {
    private $name;
    private $birthday;
    private $monthlySalary;
    private $noOfMonths;

    // Constructor
    public function __construct($name, $birthday, $monthlySalary, $noOfMonths) {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->monthlySalary = $monthlySalary;
        $this->noOfMonths = $noOfMonths;
    }

    //Method to get the name property
    public function getName(){
        return $this->name;
    }
     //Method to get the birthday property
     public function getBirthday(){
        return $this->birthday;
    }

    // Method to calculate age
    private function calculateAge() {
        $birthdate = new DateTime($this->birthday);
        $currentDate = new DateTime();
        $age = $birthdate->diff($currentDate)->y;
        return $age;
    }

    //Make a get method to access the private methods from outside
    public function getAge(){
        return $this->calculateAge();
    }

    // Method to calculate salary
    public function getSalary() {
        $age = $this->calculateAge(); //call the private method into public function
        // echo "Age: " .$age. PHP_EOL; //show the age when call the getSalary method
        return $this->monthlySalary * $this->noOfMonths;
    }
}


$player = new Player("Sakib", "1995-10-04", 200000, 12); // Create an instance of the Player class

// echo "Age: " . $player->calculateAge() . " years" . PHP_EOL; // Call calculateAge() methods and get the output
echo "Salary: " . $player->getSalary() . PHP_EOL; // Call getSalary() methods and get the output

echo "Player Name: ".$player->getName() .PHP_EOL; // Access private propeties by calling the get methods
echo "Player Birthdate: ".$player->getBirthday().PHP_EOL; // Access private propeties by calling the get methods
echo "Age: ".$player->getAge(); // Access private propeties by calling the get methods


