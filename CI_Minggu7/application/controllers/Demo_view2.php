<?php
class Demo_view2 extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->helpers('url');
	}
	public function index(){
		$this->load->view('Demo_view1');
	}
}
?>