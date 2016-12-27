<?php

namespace Shapes\Test;

use Shapes\Model\Square;

class SquareTest extends \PHPUnit_Framework_TestCase {

	public function testCalcArea() {
		$testSquare = new Square(3);
		$expectedResult = 9;

		$result = $testSquare->calcArea();

		$this->assertEquals($expectedResult, $result);
	}

	public function testCalcPerimeter() {
		$testSquare = new Square(3);
		$expectedResult = 12;

		$result = $testSquare->calcPerimeter();

		$this->assertEquals($expectedResult, $result);
	}
}

?>