<?php
//Declare class
class Kalkulator{

	//private Properties
	private $angka1;
	private $angka2;
	private $angka3;
}
	//Method
	class Hitung extends Kalkulator{
		public function tambah ()
		{
			return "Penjumlahan dari 100 + 5 + 4 = " . $jmlh = $this -> angka1 + $this -> angka2 + $this -> angka3;
			return $jmlh;
		}

		public function kurang ()
		{
			return "Pengurangan dari 100 - 5 - 4 = " . $jmlh = $this -> angka1 - $this -> angka2 - $this -> angka3;
			return $jmlh;
		}

		public function bagi ()
		{
			return "Pembagian dari 100 : 5 : 4 = " . $jmlh = $this -> angka1 / $this -> angka2 / $this -> angka3;
			return $jmlh;
		}

		public function kali ()
		{
			return "Perkalian dari 100 x 5 x 4 = " . $jmlh = $this -> angka1 * $this -> angka2 * $this -> angka3;
			return $jmlh;
		}
	}
	//Membuat object
	$cal = new Hitung();

	//Set values
	$cal -> angka1 = 100;
	$cal -> angka2 = 5;
	$cal -> angka3 = 4;

	//Printout
	echo $cal -> tambah();
	echo "<br />";
	echo $cal -> kurang();
	echo "<br />";
	echo $cal -> bagi();
	echo "<br />";
	echo $cal -> kali();
	
?>