<?php
//Declare class
class Kendaraan{
	//Properties
	public $jenis_kendaraan;
	public $jumlah_roda;
	public $merk;
	public $bahan_bakar;
	public $harga;
	public $tahun_pembuatan;
	public $syarat;
	public $syarat2;

	//Method = Subsidi BBM
	public function Subsidi_BBM () {
	$syarat = "2005";
	$syarat2 = "Premium";
	$this -> tahun_pembuatan;
	$this -> bahan_bakar;
	if ($this -> tahun_pembuatan > $syarat and $this -> bahan_bakar != $syarat2){
		echo $this -> merk . " tidak mendapat subsidi karena berbahan bakar " . $this -> bahan_bakar .  " dan tahun pembuatannya " . $this -> tahun_pembuatan;
	} elseif ($this -> tahun_pembuatan == $syarat and $this -> bahan_bakar == $syarat2) {
		echo $this -> merk . " tidak mendapat subsidi karena berbahan bakar " . $this -> bahan_bakar .  " dan tahun pembuatannya " . $this -> tahun_pembuatan;
	} elseif ($this -> tahun_pembuatan < $syarat and $this -> bahan_bakar == $syarat2) {
		echo $this -> merk . " mendapat subsidi karena berbahan bakar " . $this -> bahan_bakar .  " dan tahun pembuatannya " . $this -> tahun_pembuatan;
	} else {
		echo $this -> merk . " tidak mendapat subsidi karena berbahan bakar " . $this -> bahan_bakar .  " dan tahun pembuatannya " . $this -> tahun_pembuatan;
	}}
}
//Membuat instance
$Innova = new Kendaraan();
$Avanza = new Kendaraan();
$Vario = new Kendaraan();
$Revo = new Kendaraan();

//Get values
echo $Innova -> jenis_kendaraan = "Mobil"; //Mobil
echo "<br />";
echo $Innova -> jumlah_roda = "4"; //4
echo "<br />";
echo $Innova -> merk = "Toyota Kijang Innova"; //Toyota Kijang Innova
echo "<br />";
echo $Innova -> bahan_bakar = "Pertamax"; //Pertamax
echo "<br />";
echo $Innova -> harga = "Rp 200.000.000,-"; //Rp 200.000.000,-
echo "<br />";
echo $Innova -> tahun_pembuatan = 2019;
echo "<hr />";

//Get values
echo $Avanza -> jenis_kendaraan = "Mobil"; //Mobil
echo "<br />";
echo $Avanza -> jumlah_roda = "4"; //4
echo "<br />";
echo $Avanza -> merk = "Toyota Avanza"; //Toyota Avanza
echo "<br />";
echo $Avanza -> bahan_bakar = "Pertamax"; //Pertamax
echo "<br />";
echo $Avanza -> harga = "Rp 150.000.000,-"; //Rp 150.000.000,-
echo "<br />";
echo $Avanza -> tahun_pembuatan = 2004;
echo "<hr />";

//Get values
echo $Vario -> jenis_kendaraan = "Motor"; //Motor
echo "<br />";
echo $Vario -> jumlah_roda = "2"; //2
echo "<br />";
echo $Vario -> merk = "Honda Vario 125"; //Honda Vario 125
echo "<br />";
echo $Vario -> bahan_bakar = "Premium"; //Premium
echo "<br />";
echo $Vario -> harga = "Rp 21.000.000,-"; //Rp 21.000.000,-
echo "<br />";
echo $Vario -> tahun_pembuatan = 2009;
echo "<hr />";

//Get values
echo $Revo -> jenis_kendaraan = "Motor"; //Motor
echo "<br />";
echo $Revo -> jumlah_roda = "2"; //2
echo "<br />";
echo $Revo -> merk = "Honda Revo"; //Honda Revo
echo "<br />";
echo $Revo -> bahan_bakar = "Premium"; //Premium
echo "<br />";
echo $Revo -> harga = "Rp 15.000.000,-"; //Rp 15.000.000,-
echo "<br />";
echo $Revo -> tahun_pembuatan = 2004;
echo "<hr />";

//methods get a Subsidi BBM
echo $Innova -> Subsidi_BBM();
echo "<br />";
echo $Avanza -> Subsidi_BBM();
echo "<br />";
echo $Vario -> Subsidi_BBM();
echo "<br />";
echo $Revo -> Subsidi_BBM();
?>