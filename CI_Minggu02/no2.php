<?php
//Declare class
class Laptop{
	//Properties
	public $pemilik;
	public $merk;

	//Method
	public function hidupkan_laptop ()
	{
	return "HALLO ^,^ Laptop Berhasil dihidupkan";
	}

	public function matikan_laptop ()
	{
	return "jangan lupa dimatikan apabila tidak digunakan ^,^";
	}

	public function restart_laptop ()
	{
	return "Program tidak merespon, Lakukan RESTART ^_^";
	}
}
//Membuat instance
$MyLaptop = new Laptop();

////Printout
echo $MyLaptop -> pemilik = "Pemilik Laptop: Aulia Dinin Putri Alifiah";
//Pemilik Laptop: Aulia Dinin Putri Alifiah
echo "<br />";
echo $MyLaptop -> merk = "Lenovo Yoga 500"; //Lenovo Yoga 500
echo "<hr />";

//Get a methods
echo $MyLaptop -> hidupkan_laptop();
echo "<br />";
echo $MyLaptop -> matikan_laptop();
echo "<br />";
echo $MyLaptop -> restart_laptop();
?>