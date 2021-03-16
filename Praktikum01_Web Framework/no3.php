<?php
//Declare class
class Kendaraan{
	//Properties
	public $merk;
	public $tahun_pembuatan;
	public $harga_second;

	//Method = Return_Harga_Second
	public function Return_Harga_Second () {
	$harga_second = $this -> tahun_pembuatan ;
	if ($harga_second > 2010){
		echo $this -> merk . " Harga secondnya turun 20% dari harga asli karena pembuatannya di tahun " . $this -> tahun_pembuatan;
		echo "<br />";
	} elseif ($harga_second >= 2005 and $harga_second <= 2010) {
		echo $this -> merk . " Harga secondnya turun 30% dari harga asli karena pembuatannya di tahun " . $this -> tahun_pembuatan;
		echo "<br />";
	} else {
		echo $this -> merk . " Harga secondnya turun 40% dari harga asli karena pembuatannya di tahun " . $this -> tahun_pembuatan;
	}}
}
//Membuat instance
$Innova = new Kendaraan();
$Vario = new Kendaraan();
$Revo = new Kendaraan();

//Get values
echo $Innova -> merk = "Toyota Kijang Innova"; //Toyota Kijang Innova
echo "<br />";
echo $Innova -> tahun_pembuatan = 2019; //2019
echo "<hr />";

//Get values
echo $Vario -> merk = "Honda Vario 125"; //Honda Vario 125
echo "<br />";
echo $Vario -> tahun_pembuatan = 2009; //2009
echo "<hr />";

//Get values
echo $Revo -> merk = "Honda Revo"; //Honda Revo
echo "<br />";
echo $Revo -> tahun_pembuatan = 2004; //2004
echo "<hr />";

//methods get a Return_Harga_Second
echo $Innova -> Return_Harga_Second();
echo "<br />";
echo $Vario -> Return_Harga_Second();
echo "<br />";
echo $Revo -> Return_Harga_Second();
?>