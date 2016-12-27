<?php

namespace Shapes\Model;

class Triangle extends TriangleAreaCalculator {
	protected $width;
	protected $height;
	protected $side1;
	protected $side2;

	public function __construct($width) {
		$this->setWidth($width);
	}

	protected function setWidth($width) {
		try {
			if (!is_numeric($width) || $width <= 0) {
				throw new \Exception("The value has to be a positive integer or float.");
			}
			$this->width = $width;
		}
		catch(\Exception $e) {
			echo $e->getMessage();
		}
	}

	public function setHeight($height) {
		try {
			if (!is_numeric($height) || $height <= 0) {
				throw new \Exception("The value has to be a positive integer or float.");
			}
			$this->height = $height;
			return $this;
		}
		catch(\Exception $e) {
			echo $e->getMessage();
		}
	}

	public function setSides($side1, $side2) {
		try {
			if (!is_numeric($side1) || $side1 <= 0 || !is_numeric($side2) || $side2 <= 0) {
				throw new \Exception("The value have to be positive integers or floats.");
			}
			$this->side1 = $side1;
			$this->side2 = $side2;
			return $this;
		}
		catch(\Exception $e) {
			echo $e->getMessage();
		}
	}

	public function calcArea() {
		if (!empty($this->height) && !empty($this->width)) {
			return parent::calcTriangleArea($this->width, $this->height);
		}
		else {
			return "Please enter valid data";
		}
	}
	
	public function calcPerimeter () {
		if (!empty($this->width) && !empty($this->side1) && !empty($this->side2)) {
			return $this->width + $this->side1 + $this->side2;
		}
		else {
			return "Please enter valid data";
		}
	}
}

?>