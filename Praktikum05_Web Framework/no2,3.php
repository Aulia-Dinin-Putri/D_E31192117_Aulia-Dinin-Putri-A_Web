<?php
//Declare class
interface hitungLuas{
}
class luasPersegi implements hitungLuas{
	private $sisi;

	//Method
	public function __construct ($sisi)
	{
		$this -> sisi = $sisi;
	}

	//calculates the area of Persegi
	public function hitungLuasPersegi()
	{
		return $this -> sisi * $this -> sisi;
	}
}
class luasSegitiga implements hitungLuas{
	private $alas;
	private $tinggi;

	//Method
	public function __construct ($alas, $tinggi)
	{
		$this -> alas = $alas;
		$this -> tinggi = $tinggi;
	}

	//calculates the area of Segitiga
	public function hitungLuasSegitiga()
	{
		return $this -> alas * $this -> tinggi / 2;
	}
}
class luasLingkaran implements hitungLuas{
	private $jari2;

	//Method
	public function __construct ($jari2)
	{
		$this -> jari2 = $jari2;
	}

	//calculates the area of Lingkaran
	public function hitungLuasLingkaran()
	{
		return $this -> jari2 * $this -> jari2 * 22/7;
	}
} 

//Create a new Object
$pers = new luasPersegi(7);
$tiga = new luasSegitiga(4,6);
$ling = new luasLingkaran(14);

//Printout
echo "<b><center> HASIL DARI PERHITUNGAN LUAS BANGUN DATAR </center></b>";
echo "<hr />";
echo "Hasil dari perhitungan Luas Persegi : ";
echo "<b>" . $pers -> hitungLuasPersegi() . "cm<sup>2</sup></b><br />";
echo "Hasil dari perhitungan Luas Segitiga : ";
echo "<b>" . $tiga -> hitungLuasSegitiga() . "cm<sup>2</sup></b><br />";
echo "Hasil dari perhitungan Luas Lingkaran : ";
echo "<b>" . $ling -> hitungLuasLingkaran() . "cm<sup>2</sup></b><br />";
?>