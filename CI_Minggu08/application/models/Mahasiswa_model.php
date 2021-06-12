<?php
class Mahasiswa_model extends CI_Model {
	public function get_data(){
		$data_mahasiswa = [["nama"=>"Kim Jefry","prodi"=>"MIF"],
		["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
		["nama"=>"Budi Sudarsono","prodi"=>"TIF"]];
		return $data_mahasiswa;
	}

	public function get_data1(){
		$data_mahasiswa_prodi = [["no"=>"1","prodi"=>"MIF","keterangan"=>"Manajemen Informatika"],
		["no"=>"2","prodi"=>"TKK","keterangan"=>"Teknik Komputer"],
		["no"=>"3","prodi"=>"TIF","keterangan"=>"Teknik Informatika"]];
		return $data_mahasiswa_prodi;
	}

	public function get_data2(){
		$data_mahasiswa_angkatan = [["no"=>"1","angkatan"=>"2016"],
		["no"=>"2","angkatan"=>"2017"],
		["no"=>"3","angkatan"=>"2018"]];
		return $data_mahasiswa_angkatan;										
	}
}?>