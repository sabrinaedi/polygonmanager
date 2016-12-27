<?php

namespace Shapes\Test;

use Shapes\Model\Triangle;

class TriangleTest extends \PHPUnit_Framework_TestCase {

	public function testCalcArea() {
		$testTriangle = new Triangle(2);
		$expectedResult = 3;

		$result = $testTriangle->setHeight(3)->calcArea();

		$this->assertEquals($expectedResult, $result);
	}

	public function testCalcPerimeter() {
		$testTriangle = new Triangle(2);
		$expectedResult = 11;

		$result = $testTriangle->setSides(4,5)->calcPerimeter();

		$this->assertEquals($expectedResult, $result);
	}
}

?>