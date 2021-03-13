<?php
//Declare parent class
class Car{
	//The $model properties is protected, so it can be accessed
	//from within the class and its child classes
	protected $model;

	//Public setter method
	public function setModel ($model)
	{
		$this -> model = $model;
	}
}

//The child class
class SportsCar extends Car{
	//Has no problem to get a protected properties that belongs to the parent
	public function hello ()
	{
	return "beep! I am a <i>" . $this -> model . "<i><br />";
	
	}
}

//Create an instance from the child class
$sportsCar1 = new SportsCar();
?>