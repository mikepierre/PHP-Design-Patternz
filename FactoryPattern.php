<?php
/**
* The factory pattern is sued to create an object withour exposing logic to a user.
*/
interface Shape
{
	protected static function draw(){}
}

class Rectangle extends Shape
{
	protected static function draw()
	{
		return "Inside the Rectangle Function";
	}
}

class Circle extends Shape
{
	protected static function draw()
	{
		return "Inside the Circle Function";
	}
}


class ShapeFactory
{
	private $shape;

	function __construct($arg)
	{
		$this->shape = $arg;
	}

	public function getShape()
	{
		switch ($this->shape) {
			case "rectangle":
				self::draw();
				break;
			
			case "circle":
				self::draw();
				break;
		}
	}
}


?>