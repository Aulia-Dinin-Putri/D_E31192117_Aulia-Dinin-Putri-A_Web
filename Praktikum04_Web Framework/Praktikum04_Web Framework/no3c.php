<?php
//Declare parent class
class Tablet{
	//Private properties
	private $merk;
	private $camera;
	private $memory;

	private function merk()
	{
		return $this -> merk;
	}
	public function tampil_merk()
	{
		return "Merk: Samsung Galaxy A6+";
	}
	private function camera()
	{
		return $this -> camera;
	}
	public function tampil_camera()
	{
		return "Camera: 24 MP";
	}
	private function memory()
	{
		return $this -> memory;
	}
	public function tampil_memory()
	{
		return "Memory: 32GB";
	}
}

//The child class inherits the code from the parent class
class Handphone extends Tablet{
	private $handphone_baru;
	//Method
	private function handphone_baru()
	{
		return $this -> handphone_baru;
	}
	public function beli_handphone()
	{
		return "<b><center>Spesifikasi Handphone: </center></b>";
	}
}

//Create an instance from the child class
$hp1 = new Handphone();


//Printout
echo $hp1 -> beli_handphone();
echo "<hr />";
echo $hp1 -> tampil_merk();
echo "<br />";
echo $hp1 -> tampil_camera();
echo "<br />";
echo $hp1 -> tampil_memory();
echo "<p>Private adalah salah satu hak akses yang digunakan pada properti dan method dalam kode program. Apabila properti dan method menggunakan hak akses private maka memberikan akses properti yang hanya dapat diakses dari dalam class tersebut.</p>"
?>