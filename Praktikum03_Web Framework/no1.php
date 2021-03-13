<?php
//Declare class
class Kalkulator{
	//Properties
	public $pemilik;

	//Method = hitung
	public function hitung ()
	{
	return "Alat ini digunakan untuk memudahkan perhitungan operasi matematika";
	}
}
//Membuat instance
$Calculator = new Kalkulator();

//Printout
echo $Calculator -> pemilik = "Pemilik: Aulia Dinin Putri Alifiah";
//Pemilik: Aulia Dinin Putri Alifiah
echo "<br />";

//Get a methods
echo $Calculator -> hitung();
?>