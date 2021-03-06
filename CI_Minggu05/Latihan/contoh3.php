<?php
//Declare class
interface Shape{

	//Method
	public function calcArea ();
}
class Circle implements Shape{
	private $radius;

	//Method
	public function __construct ($radius)
	{
		$this -> radius = $radius;
	}

	//calcArea calculates the area of circles
	public function calcArea ()
	{
		return $this -> radius * $this -> radius * pi();
	}
}
class Rectangle implements Shape{
	private $width;
	private $height;

	//Method
	public function __construct ($width, $height)
	{
		$this -> width = $width;
		$this -> height = $height;
	}

	//calcArea calculates the area of rectangles
	public function calcArea ()
	{
		return $this -> width * $this -> height;
	}
}

//Create a new Object
$circ = new Circle(3);
$rect = new Rectangle(3,4);

//Printout
echo $circ -> calcArea();
echo $rect -> calcArea();
?>