<?php
//Declare parent class
class Car{
	//The $model properties is private, thus it can be accessed
	//Only from inside the class
	private $model;

	//Public setter method
	public function setModel ($model)
	{
		$this -> model = $model;
	}
}

//The child class
class SportsCar extends Car{
	//Tries to get a private properties that belongs to the parent
	public function hello ()
	{
	return "beep! I am a <i>" . $this -> model . "<i><br />";
	}
}

//Create an instance from the child class
$sportsCar1 = new SportsCar();

//Set the class model name
$sportsCar1 -> setModel ('Mercedes Benz');

?>