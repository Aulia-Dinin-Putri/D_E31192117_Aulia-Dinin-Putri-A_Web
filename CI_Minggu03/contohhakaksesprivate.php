<?php
//Declare class
class Car{
	//Private methods & properties
	private $model;

	//Method = getModel
	public function getModel ()
	{
	return "The car model is " . $this -> model;
	}
}

//Create object di class
$mercedes = new Car();

//Akses properties dari dalam class
$mercedes -> model = "Mercedes Benz";
//Akses properties dari luar class
echo $mercedes -> getModel();
?>