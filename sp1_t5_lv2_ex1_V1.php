<?php

/* Level 2
- Exercise 1
Write a program that defines a Shape class with a constructor that receives width and height as parameters. It defines two subclasses; Triangle and Rectangle that inherit from Shape and calculate respectively the area of the shape area().

important

Yes, it's the same exercise as in POO1, but here we need you to solve it by applying one of the concepts from the POO2 topic:
Abstract or Interface. */

interface Three_D_shapes{
    public function calculateArea();
}

abstract class shape{
    public $width;
    public $height;

    public function __construct($width, $height){
        $this -> width = $width;
        $this -> height = $height;
    }

    public abstract function calculateArea();
    
}

class Triangle extends shape{
    // Area = (1/2) * height * width

    public function calculateArea(){
        $result = 0.5 * $this-> width * $this-> height;
        return $result;
    }
}

class Rectangle extends shape{
// Area = width * height
    public function calculateArea(){
    $result = $this->width * $this->height;
    return $result;
}
}

class Cube extends shape implements Three_D_shapes{
    //private $width;
    //private $height;
    private $depth;

    public function __construct($width, $height, $depth) {
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }
    
    //Cube area = width * height * depth.
    public function calculateArea(){
        $result = $this->width * $this->height * $this->depth;
        return $result;
    }
}


//Exercise didn't ask to instantiate and call methods. This is only for demonstration purposes.

$triangle = new Triangle(5, 7);
$rectangle = new Rectangle(4, 4);
$cube = new Cube(2, 2, 2);

echo $triangle->calculateArea();
echo PHP_EOL;
echo $rectangle->calculateArea();
echo PHP_EOL;
echo $cube->calculateArea();
echo PHP_EOL;

?>