<?php
//Declare class
class Buku{
	//Properties
	public $judul_buku = 'Sang Pemimpi';
	public $pengarang = 'Andrea Hirata';
	public $penerbit = 'Bentang Pustaka';
	public $tahun_terbit = '2006';
	public $cetakan ='kedua';

	//Method=hello
	public function hello ()
	{
	return "jangan lupa dibaca ^,^";
	}
}
//Membuat instance
$fiksi = new Buku();

//Get values
echo $fiksi -> judul_buku; //Sang Pemimpi
echo "<br />";
echo $fiksi -> pengarang; //Andrea Hirata
echo "<br />";
echo $fiksi -> penerbit; //Bentang Pustaka
echo "<br />";
echo $fiksi -> tahun_terbit; //2006
echo "<br />";
echo $fiksi -> cetakan; //kedua
echo "<hr />";

//methods get a jangan lupa dibaca
echo $fiksi -> hello(); //jangan lupa dibaca
?>