<?php

namespace Shapes\Controller;

require_once __DIR__ . '/../../vendor/autoload.php';

use Shapes\Model\Rectangle;
use Shapes\Model\RegularPolygon;
use Shapes\Model\Square;
use Shapes\Model\Triangle;

echo "<p> Here are some demonstrations of the calculations. </p>";

echo "<p>This is the area of a rectangle with a width of 3cm and a height of 8cm: " .
$rectangle = (new Rectangle(3,8))->calcArea();

echo "<br> And this is its perimeter: " .
$rectangle = (new Rectangle(3,8))->calcPerimeter() . "</p>";

echo "<p> And this is the area of a square with a sidelength of 15cm: " . 
$square = (new Square(15))->calcArea();

echo "<br> and its perimeter: " .
$square = (new Square(15))->calcPerimeter() . "</p>";

echo "<p> Now lets see the area of a triangle with a width of 15cm and a Height of 5cm: " . 
$triangle = (new Triangle(15))->setHeight(5)->calcArea();

echo "<br> and the perimeter of a triangle with the same base, and two sides of 5cm and 6cm: " .
$square = (new Triangle(15))->setSides(5,6)->calcPerimeter() . "</p>";

echo "<p> And here is the area of a regular polygon with 5 sides and an inner radius of 7cm: ";
$polygon = new regularPolygon(5,7);
echo $polygon->calcArea();

echo "<br> and its perimeter: ";
$polygon = new regularPolygon(5,7);
echo $polygon->calcPerimeter() . "</p>";

?>
