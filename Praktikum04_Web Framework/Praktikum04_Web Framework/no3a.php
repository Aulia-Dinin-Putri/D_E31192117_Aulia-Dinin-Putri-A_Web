<?php
//Declare parent class
class Tablet{
	//Public properties
	public $merk;
	public $camera;
	public $memory;

	public function tampil_merk()
	{
		return "Merk: <i>" . $this -> merk . "<i><br />";
	}
	public function tampil_camera()
	{
		return "Camera: <i>" . $this -> camera . "<i><br />";
	}
	public function tampil_memory()
	{
		return "Memory: <i>" . $this -> memory . "<i><br />";
	}
}

//The child class inherits the code from the parent class
class Handphone extends Tablet{
	public $handphone_baru;
	//Method
	public function beli_handphone()
	{
		return "Spesifikasi Handphone: <i>" . $this -> handphone_baru . "<i><br />";
	}
}

//Create an instance from the child class
$hp1 = new Handphone();
$hp2 = new Handphone();

$hp1 -> merk = "Samsung Galaxy A6+";
$hp1 -> camera = "24 MP";
$hp1 -> memory = "32GB";
$hp1 -> handphone_baru = "New";
$hp2 -> merk = "Asus Zenfone 5";
$hp2 -> camera = "12 MP";
$hp2 -> memory = "16GB";
$hp2 -> handphone_baru = "New";

//Printout
echo $hp1 -> tampil_merk();
echo $hp1 -> tampil_camera();
echo $hp1 -> tampil_memory();
echo "<hr />";
echo $hp2 -> tampil_merk();
echo $hp2 -> tampil_camera();
echo $hp2 -> tampil_memory();
echo "<p>Public adalah salah satu hak akses yang digunakan pada properti dan method dalam kode program. Apabila properti dan method menggunakan hak akses public maka memberikan akses properti yang dapat diakses dari mana saja.</p>"
?>