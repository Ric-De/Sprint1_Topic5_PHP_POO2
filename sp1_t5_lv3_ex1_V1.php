<?php

interface Shape {
    public function calculateArea();
}

abstract class AbstractShape implements Shape {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}

class Triangle extends AbstractShape {
    public function calculateArea() {
        return 0.5 * $this->width * $this->height;
    }
}

class Rectangle extends AbstractShape {
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        //Area = Pi * radius square 2.
        define('PI', 3.14);
        //const PI = 3.14;
        return PI * $this->radius * $this->radius;
    }
}

$triangle = new Triangle(5, 7);
$rectangle = new Rectangle(4, 4);
$circle = new Circle(3);

echo "Triangle Area: " . $triangle->calculateArea() . "<br>";
echo PHP_EOL;
echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";
echo PHP_EOL;
echo "Circle Area: " . $circle->calculateArea();
echo PHP_EOL;


?>