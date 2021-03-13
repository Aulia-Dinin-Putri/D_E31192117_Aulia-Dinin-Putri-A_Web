<?php
//Declare parent class
class ItemProduk{
	//Properties
	public $Ukuran;
	public $Warna;
	public $Nama;
	private $model;
	private $tipemodel;
	private $tipe;

}

//The child class inherits the code from the parent class
class Topi extends ItemProduk{
	//Method
	public function Tampil_size()
	{
		return "Topi ini memiliki size <i>" . $this -> Ukuran . "<i><br />";
	}
	public function Tampil_warna()
	{
		return "Topi ini berwarna <i>" . $this -> Warna . "<i><br />";
	}
	public function Tampil_nama()
	{
		return "Pemilik topi ini adalah <i>" . $this -> Nama . "<i><br />";
	}
}
class Celana extends ItemProduk{
	//Method
	public function Tampil_size()
	{
		return "Celana ini memiliki size <i>" . $this -> Ukuran . "<i><br />";
	}
	public function Tampil_warna()
	{
		return "Celana ini berwarna <i>" . $this -> Warna . "<i><br />";
	}
	public function Tampil_nama()
	{
		return "Pemilik celana ini adalah <i>" . $this -> Nama . "<i><br />";
	}
}
class Baju extends ItemProduk{
	//Method
	public function Tampil_size()
	{
		return "Baju ini memiliki size <i>" . $this -> Ukuran . "<i><br />";
	}
	public function Tampil_warna()
	{
		return "Baju ini berwarna <i>" . $this -> Warna . "<i><br />";
	}
	public function Tampil_nama()
	{
		return "Pemilik baju ini adalah <i>" . $this -> Nama . "<i><br />";
	}
}

//Create an instance from the child class
$item1 = new Topi();
$item2 = new Celana();
$item3 = new Baju();

$item1 -> Ukuran = "XL";
$item1 -> Warna = "Biru";
$item1 -> Nama = "Aulia";
$item2 -> Ukuran = "L";
$item2 -> Warna = "Army";
$item2 -> Nama = "Dinar";
$item3 -> Ukuran = "M";
$item3 -> Warna = "Navy";
$item3 -> Nama = "Dita";

//Printout
echo $item1 -> Tampil_size();
echo $item1 -> Tampil_warna();
echo $item1 -> Tampil_nama();
echo "<hr />";
echo $item2 -> Tampil_size();
echo $item2 -> Tampil_warna();
echo $item2 -> Tampil_nama();
echo "<hr />";
echo $item3 -> Tampil_size();
echo $item3 -> Tampil_warna();
echo $item3 -> Tampil_nama();
?>