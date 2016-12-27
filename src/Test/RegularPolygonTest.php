<?php

namespace Shapes\Test;

use Shapes\Model\RegularPolygon;

class RegularPolygonTest extends \PHPUnit_Framework_TestCase {
	public function testCalcArea() {
		$testPolygon = new RegularPolygon(5, 5);
		$expectedResult = 90.81781600067;

		$result = $testPolygon->calcArea();

		$this->assertEquals($expectedResult, $result);
	}

	public function testCalcPerimeter() {
		$testPolygon = new RegularPolygon(5, 5);
		$expectedResult = 36.327126400268;

		$result = $testPolygon->calcPerimeter();

		$this->assertEquals($expectedResult, $result);
	}
}

?>