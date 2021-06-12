<?php
	class Tugasno3 extends CI_Controller{
		public function index() {
			$this->load->model('Tugasno3');
			$data = $this->Tugasno3->tampil_txt();
			echo $data;
		}
	}
?>
