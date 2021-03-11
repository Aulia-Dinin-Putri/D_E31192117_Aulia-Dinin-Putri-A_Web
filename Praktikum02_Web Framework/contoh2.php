<?php
//Declare class
class Car{
	//Properties
	public $tank; 

	//Method
	// Tambahkan galon bahan bakar ke tangki saat kita mengisinya
	public function fill ($float)
	{
	$this -> tank += $float;
	return $this;
	}

	// Kurangi galon bahan bakar dari tangki saat kita mengendarai mobil
	public function ride ($float)
	{
	$miles = $float;
	$gallons = $miles/50;
	$this -> tank -= ($gallons);

	return $this;
	}
}

//Create a new object from the Car class
$bmw = new Car();

//Tambahkan 10 galon bahan bakar, lalu kendarai sejauh 40 mil
//Dan dapatkan jumlah galon di dalam tangki
$tank = $bmw -> fill(10) -> ride(40) -> tank;

//Printout
echo "The number of gallons left in the tank: " . $tank . " gal.";
//The number of gallons left in the tank: 9.2 gal.
?>