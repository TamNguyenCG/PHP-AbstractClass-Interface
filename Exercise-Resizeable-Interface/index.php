<?php
include "vendor/autoload.php";

use Geometry\Circles;
use Geometry\Rectangle;
use Geometry\Square;

$circle = new Circles("Circle",20);
echo "This is a Circle with name is: $circle->name <br> Radius is:  $circle->radius<br>";
$circle->setPercent(20);
echo "Circle Radius resize by {$circle->getPercent()} % = {$circle->resize()} radius <hr>";

$rectangle = new Rectangle("Rectangle",15,20);
echo "This is a Rectangle with name is: $rectangle->name <br> 
                                Width: $rectangle->width cm <br> 
                                Height: $rectangle->height cm <br>";
$rectangle->setPercent(30);
echo "Rectangle Width and Height resize by {$rectangle->getPercent()} % : Width = {$rectangle->resize()} cm
                                                                        - Height = {$rectangle->resizeHeight()} cm <hr>";

$square = new Square("Square",25);
echo "This is Square with name is:  $square->name <br> Side: $square->width cm <br>";
$square->setPercent(20);
echo "Square Side resize by {$square->getSquarePercent()}% : Side = {$square->resize()} cm";