<?php
//Declare class
class Kalkulator{

	//private Properties
	private $angka1;
	private $angka2;
	private $angka3;
}
	//Method = hello
	class Hitung extends Kalkulator{
		public function hello ()
		{
			return "Pembagian dari 100 : 5 : 4 = " . $bagi = $this -> angka1 / $this -> angka2 / $this -> angka3;
			return $bagi;
		}
	}
	//Membuat instance
	$cal = new Hitung();

	//Set values
	$cal -> angka1 = 100;
	$cal -> angka2 = 5;
	$cal -> angka3 = 4;

	//Get a methods
	echo $cal -> hello(); //Pembagian dari 100 : 5 : 4 = 5
	
?>