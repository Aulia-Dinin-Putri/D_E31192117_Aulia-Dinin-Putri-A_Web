<?php
//Declare class
class Laptop{
	//Properties
	public $pemilik;
	public $merk;

	//Method
	public function hidupkan_laptop ()
	{
	return " Hidupkan laptop " . $this -> merk . " milik " . $this -> pemilik;
		echo "<br />";
	}

	public function matikan_laptop ()
	{
	return " Matikan laptop " . $this -> merk . " milik " . $this -> pemilik;
		echo "<br />";
	}

	public function restart_laptop ()
	{
	return " Matikan laptop " . $this -> merk . " milik " . $this -> pemilik . "." . " Hidupkan laptop " . $this -> merk . " milik " . $this -> pemilik;
		echo "<br />";
	}
}
//Membuat object
$Laptop1 = new Laptop();
$Laptop2 = new Laptop();
$Laptop3 = new Laptop();

////Printout
echo $Laptop1 -> pemilik = "A"; //A
echo "<br />";
echo $Laptop1 -> merk = "ASUS"; //ASUS
echo "<br />";
echo $Laptop2 -> pemilik = "B"; //B
echo "<br />";
echo $Laptop2 -> merk = "Acer"; //Acer
echo "<br />";
echo $Laptop3 -> pemilik = "C"; //C
echo "<br />";
echo $Laptop3 -> merk = "Lenovo"; //Lenovo
echo "<hr />";



//get a methods
echo $Laptop1 -> hidupkan_laptop();
echo "<br />";
echo "<br />";
echo $Laptop2 -> matikan_laptop();
echo "<br />";
echo "<br />";
echo $Laptop3 -> restart_laptop();
?>