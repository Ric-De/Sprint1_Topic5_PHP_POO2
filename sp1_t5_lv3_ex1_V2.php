<?php

/* Level 3
- Exercise 1
Following the previous exercise, imagine how you would expand the structure you created to represent a Circle and its corresponding area calculation. */

interface Shapes{
    public function calculateArea();
}

class shape implements Shapes{
    public $width;
    public $height;

    public function __construct($width, $height){
        $this -> width = $width;
        $this -> height = $height;
    }

    public function calculateArea(){
        $result = $this->width * $this->height;
        return $result;
    }
    
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

class Circle implements Shapes{
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function calculateArea() {
    //Area = Pi * radius square 2.
     define('PI', 3.14);
     return PI * $this->radius * $this->radius;
}
}

//Exercise didn't ask to instantiate and call methods. This is only for demonstration purposes.

$triangle = new Triangle(5, 7);
$rectangle = new Rectangle(4, 4);
$circle = new Circle(4);

echo $triangle->calculateArea();
echo PHP_EOL;
echo $rectangle->calculateArea();
echo PHP_EOL;
echo $circle->calculateArea();
echo PHP_EOL;
?>