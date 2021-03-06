<?php

namespace Shapes\Test;

use Shapes\Model\Rectangle;

class RectangleAreaTest extends \PHPUnit_Framework_TestCase {
	/**
	 *	@param $testVar1
	 *	@param $testVar2
	 *	@param expectedResult
     *  @dataProvider providerTestCalc()
     */

	public function testCalcArea($testVar1, $testVar2, $expectedResult) {
		$testRectangle = new Rectangle($testVar1, $testVar2);

		$result = $testRectangle->calcArea();

		$this->assertEquals($expectedResult, $result);
	}

	public function providerTestCalc() {
		return array(
			array('2', '3', '6'),
			array('-2', '3', 'Please enter valid data'),
			array('2', '-3', 'Please enter valid data'),
			array('b', '-3', 'Please enter valid data'),
			array('a', '0', 'Please enter valid data'),
			array('&', '2', 'Please enter valid data')
			);
	}
}

?>