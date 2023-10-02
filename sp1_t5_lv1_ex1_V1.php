<?php

/* Exercise 1
We need to create a data type that represents an animal. Animals have a name, however, the sound of a dog's "talking" is not the same as that of a cat. Therefore, we need to create other types of data that help us program these behaviors. Basically, we want a makeSound() method that displays a different message if it's a dog (eg “Bup, bup!”) or a cat (eg “Mine!”). */

class Animal {
    private $animalName = 'animal';
    public function makeSound() {
        echo "Sounds like an animal.";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Sounds like a dog: Bup, bup!";
    }

}

class Cat extends Animal {
    public function makeSound() {
        echo "Sounds like a cat: Mine!";
}

}

class Snake extends Animal {
PUBLIC function makeSound() {
    echo "Sounds like a snake: Shhhhhhhhh.";

}

}

$Pluto = new Dog();
echo $Pluto->makeSound();
echo PHP_EOL;
$wireCat = new Cat();
echo $wireCat->makeSound();





?>