<?php

namespace Shapes\Model;

class Rectangle extends Polygons {
	protected $height;
	protected $width;

	public function __construct ($height, $width) {
		$this->setHeight($height);
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

	protected function setHeight($height) {
		try {
			if (!is_numeric($height) || $height <= 0) {
				throw new \Exception("The value has to be a positive integer or float.");
			}
			$this->height = $height;

		}
		catch(\Exception $e) {
			echo $e->getMessage();
		}
	}

	public function calcArea() {
		if (!empty($this->width) && !empty($this->height)) {
			return $this->width*$this->height;
		}
		else {
			return "Please enter valid data";
		}
	}

	public function calcPerimeter() {
		if (!empty($this->width) && !empty($this->height)) {
			return 2*$this->width + 2*$this->height;
		}
		else {
			return "Please enter valid data";
		}
	}
}

?>