<?php
//Declare parent class
class MobilLengkap{
	//Properties
	public $tv = "oleh Aulia";
	public $mobil = "oleh Aulia";

}

//The child class inherits the code from the parent class
class MobilBMW extends MobilLengkap{
	//Method
	public function nontonTV ()
	{
		return "Tv Dihidupkan <i>" . $this -> tv . "<i><br />" . "Tv Mencari Chanel <i>" . $this -> tv . "<i><br />" . "Tv Menampilkan gambar <i>" . $this -> tv . "<i><br />";
	}
}
class MobilBMWberaksi extends MobilBMW{
	//Method
	public function nontonTv ()
	{
		return "Tv Sedang Ditonton <i>" . $this -> tv . "<i><br />";
	}
	public function HidupkanMobil ()
	{
		return "Mobil Dihidupkan <i>" . $this -> mobil . "<i><br />";
	}
	public function MatikanMobil ()
	{
		return "Mobil Dimatikan <i>" . $this -> mobil . "<i><br />";
	}
	public function ubahGigi ()
	{
		return "Perubahan Gigi dilakukan <i>" . $this -> mobil . "<i><br />";
	}
}

//Create an instance from the child class
$mobilBMW1 = new MobilBMW();
$mobilBMW2 = new MobilBMWberaksi();

//Printout
echo $mobilBMW1 -> nontonTV();
echo "<hr />";
echo $mobilBMW2 -> nontonTv();
echo $mobilBMW2 -> HidupkanMobil();
echo $mobilBMW2 -> MatikanMobil();
echo $mobilBMW2 -> ubahGigi();
?>