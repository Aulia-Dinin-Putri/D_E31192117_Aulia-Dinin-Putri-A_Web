<?php
//Declare class
class Laptop{
	//Properties
	public $pemilik;

	//Method=klik
	public function klik ()
	{
	return "jangan lupa dimatikan apabila tidak digunakan ^,^";
	}
}
//Membuat instance
$MyLaptop = new Laptop();

//Printout
echo $MyLaptop -> pemilik = "Pemilik Laptop: Aulia Dinin Putri Alifiah";
//Pemilik Laptop: Aulia Dinin Putri Alifiah
echo "<br />";

//methods get a "jangan lupa dimatikan apabila tidak digunakan ^,^"
echo $MyLaptop -> klik(); //jangan lupa dimatikan apabila tidak digunakan ^,^
?>
