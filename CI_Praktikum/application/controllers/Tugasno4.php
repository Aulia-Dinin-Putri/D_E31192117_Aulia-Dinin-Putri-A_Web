<?php
	class Tugasno4 extends CI_Controller{
		public function index() {
			$this->load->model('Tugasno4');
			$data = $this->Tugasno4->tampil_txt();
			$this->load->view('helloview4', $data);
		}
	}
?>
