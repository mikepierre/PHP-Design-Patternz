<?php
interface Shape
{
	protected static function draw(){}
}

class Circle implements Shape
{
	function __construct(){}

	public static function draw() 
	{
		return "Circle";
	}
}

class Rectangle implements Shape
{
	function __construct(){}

	public static function draw() 
	{
		return "Rectangle";
	}
}

class CreateShape 
{
	function __construct(){}

	public function drawCircle() 
	{
		Circle::draw();
	}

	public function drawRectangle()
	{
		Rectangle::draw();
	}

}
?>