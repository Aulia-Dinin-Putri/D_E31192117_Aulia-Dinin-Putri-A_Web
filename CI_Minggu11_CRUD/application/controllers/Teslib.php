<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Teslib extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('table');
		$this->load->model('Mahasiswa_model');
	}
	public function index()
	{
		$this->benchmark->mark('first');
		$data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
		$this->load->view('view_teslib',$data);
		$this->benchmark->mark('second');
	}
}
?>