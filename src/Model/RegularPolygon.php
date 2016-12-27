<?php

namespace Shapes\Model;

class RegularPolygon extends TriangleAreaCalculator {
	protected $sideNumber;
	protected $sideLength;
	protected $innerRadius;

	public function __construct($sideNumber, $innerRadius) {
		$this->setSideNumber($sideNumber);
		$this->setInnerRadius($innerRadius);
	}

	protected function setSideNumber($sideNumber) {
		try {
			if (!is_numeric($sideNumber) || $sideNumber < 5) {
				throw new \Exception("The value has to be a positive integer (at least 5) or float.");
			}
			$this->sideNumber = $sideNumber;
		}
		catch(\Exception $e) {
			echo $e->getMessage();
		}
	}

	protected function setInnerRadius($innerRadius) {
		try {
			if (!is_numeric($innerRadius) || $innerRadius <= 0) {
				throw new \Exception("The value has to be a positive integer or float.");
			}
			$this->innerRadius = $innerRadius;
		}
		catch(\Exception $e) {
			echo $e->getMessage();
		}
	}

	protected function setSideLength() {
		$this->sideLength = 2*($this->innerRadius)*tan(M_PI/$this->sideNumber);
	}

	public function calcArea () {
		if (!empty($this->sideNumber) && !empty($this->innerRadius)) {
			if (empty($this->sideLength)) {
				$this->setSideLength();
				$tri = parent::calcTriangleArea($this->innerRadius, $this->sideLength);
			}
			return $tri*$this->sideNumber;
		}
		else {
			return "Please enter valid data";
		}
	}

	public function calcPerimeter () {
		if (!empty($this->sideNumber) && !empty($this->innerRadius)) {
			if (empty($this->sideLength)) {
				$this->setSideLength();
			}
			return $this->sideLength * $this->sideNumber;
		}
		else {
			return "Please enter valid data";
		}
	}
}

?>