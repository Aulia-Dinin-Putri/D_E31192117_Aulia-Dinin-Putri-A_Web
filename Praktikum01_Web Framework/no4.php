<?php
//Declare class
class Elektronik{
	//Properties
	public $jenis_barang_elektronik;
	public $merk;
	public $harga;
	public $lama_penggunaan;
	public $tahun_pembuatan;
	public $kerusakan;
	public $syarat;
	public $syarat2;
	public $syarat3;

	//Method = Return_Barang
	public function Return_Barang () {
	$syarat = "2015";
	$syarat2 = "5 tahun";
	$syarat3 = 20;
	$this -> tahun_pembuatan;
	$this -> lama_penggunaan;
	$this -> kerusakan;
	if ($this -> tahun_pembuatan > $syarat and $this -> lama_penggunaan <= $syarat2 and $this -> kerusakan <= $syarat3){
		echo $this -> merk . " dapat melakukan return karena penggunaan masih " . $this -> lama_penggunaan .  ", tahun pembuatannya " . $this -> tahun_pembuatan . " dan kerusakannya " . $this ->  kerusakan;
	} else {
		echo $this -> merk . " tidak dapat melakukan return karena penggunaan melebihi " . $this -> lama_penggunaan .  ", tahun pembuatannya " . $this -> tahun_pembuatan. " dan kerusakannya " . $this ->  kerusakan;
	}}
}
//Membuat instance
$Handphone = new Elektronik();
$Laptop = new Elektronik();
$Tv = new Elektronik();

//Get values
echo $Handphone -> jenis_barang_elektronik = "Handphone"; //Handphone
echo "<br />";
echo $Handphone -> merk = "Samsung Galaxy A6+"; //Samsung Galaxy A6+
echo "<br />";
echo $Handphone -> harga = "Rp 3.000.000,-"; //Rp 3.000.000,-
echo "<br />";
echo $Handphone -> lama_penggunaan = "1 tahun"; //1 tahun
echo "<br />";
echo $Handphone -> tahun_pembuatan = 2020;
echo "<br />";
echo $Handphone -> kerusakan = 40 . "%";
echo "<hr />";

//Get values
echo $Laptop -> jenis_barang_elektronik = "Laptop"; //Laptop
echo "<br />";
echo $Laptop -> merk = "Lenovo ThinkPad X220"; //Lenovo ThinkPad X220
echo "<br />";
echo $Laptop -> harga = "Rp 2.000.000,-"; //Rp 2.000.000,-
echo "<br />";
echo $Laptop -> lama_penggunaan = "10 tahun"; //10 tahun
echo "<br />";
echo $Laptop -> tahun_pembuatan = 2011;
echo "<br />";
echo $Laptop -> kerusakan = 10 . "%";
echo "<hr />";

//Get values
echo $Tv -> jenis_barang_elektronik = "Televisi"; //Televisi
echo "<br />";
echo $Tv -> merk = "SHARP Aquos N700"; //SHARP Aquos N700
echo "<br />";
echo $Tv -> harga = "Rp 3.000.000,-"; //Rp 3.000.000,-
echo "<br />";
echo $Tv -> lama_penggunaan = "4 tahun"; //4 tahun
echo "<br />";
echo $Tv -> tahun_pembuatan = 2016;
echo "<br />";
echo $Tv -> kerusakan = 15 . "%";
echo "<hr />";

//methods get a Return_Barang
echo $Handphone -> Return_Barang();
echo "<br />";
echo "<br />";
echo $Laptop -> Return_Barang();
echo "<br />";
echo "<br />";
echo $Tv -> Return_Barang();
?>