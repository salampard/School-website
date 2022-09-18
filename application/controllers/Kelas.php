<?php

/**
* 
*/
class Kelas extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Model_kelas','kelas');
	}
	
	public function index() {
		$data['kelas'] = $this->kelas->getKelas();
		$this->template->load('template','kelas/kelas',$data);
	}

	public function kelasDetail() {
		$data['kelas'] = $this->kelas->getOneKelas();
		$this->template->load('template','kelas/kelasDetail',$data);
	}
}