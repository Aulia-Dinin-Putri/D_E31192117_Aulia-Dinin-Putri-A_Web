<?php
//Declare class
class Laptop{
	//Properties
	public $pemilik;
	public $merk;

	//Method
	public function hidupkan_laptop ()
	{
	return " Hidupkan laptop " . $this -> merk . " punya " . $this -> pemilik;
		echo "<br />";
	}

	public function matikan_laptop ()
	{
	return " Matikan laptop " . $this -> merk . " punya " . $this -> pemilik;
		echo "<br />";
	}

	public function restart_laptop ()
	{
	return " Matikan laptop " . $this -> merk . " punya " . $this -> pemilik;
		echo "<br />";
	return " Hidupkan laptop " . $this -> merk . " punya " . $this -> pemilik;
		echo "<br />";
	}
}
//Membuat instance
$MyLaptop = new Laptop();

////Printout
echo $MyLaptop -> pemilik = "Aulia Dinin Putri Alifiah";
//Pemilik Laptop: Aulia Dinin Putri Alifiah
echo "<br />";
echo $MyLaptop -> merk = "Lenovo Yoga 500"; //Lenovo Yoga 500
echo "<hr />";

//Get a methods
echo $MyLaptop -> matikan_laptop();
?>