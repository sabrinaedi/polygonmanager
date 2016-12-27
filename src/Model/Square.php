<?php

namespace Shapes\Model;

class Square extends Rectangle {
	protected $height;
	protected $width; 

	final public function __construct($side) {
		$this->setHeight($side);
		$this->setWidth($side);
	}
}

?>