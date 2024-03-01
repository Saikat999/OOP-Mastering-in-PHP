<?php

class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "Some generic sound";
    }
}

// Define derived classes that inherit from Animal
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

class Duck extends Animal {
    public function makeSound() {
        return "Quack!";
    }
}

// Create instances of each class
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");
$duck = new Duck("Daffy");

// Call the makeSound method on each object
echo $dog->makeSound() . "\n"; // Outputs: Woof!
echo $cat->makeSound() . "\n"; // Outputs: Meow!
echo $duck->makeSound() . "\n"; // Outputs: Quack!
