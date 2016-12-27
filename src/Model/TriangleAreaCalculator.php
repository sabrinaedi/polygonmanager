<?php

namespace Shapes\Model;

abstract class TriangleAreaCalculator extends Polygons {

	static public function calcTriangleArea($width, $height) {
		return $width*$height / 2;
	}
}

?>