<?php

/**
* 
*/
class adminKelas extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(cek_login() === 'noLogin') {
			redirect('auth/login');
			return false;

		} elseif($this->session->userdata('SISBW')['level'] != 'admin' && $this->session->userdata('SISBW')['level'] != 'superAdmin') {
			redirect('adminHome');
			return false;
		}
		
		$this->load->model('Model_kelas','kelas');
	}
	
	public function index() {
		$data['kelas'] = $this->kelas->getKelas();
		$this->template->load('templateAdmin','admin/kelas/kelas',$data);
	}

	public function insertKelas() {
		
		if(isset($_POST['submit'])) {

			

			$this->form_validation->set_rules('kelas','Kelas','required|max_length[50]',message_id());
			$this->form_validation->set_rules('url_logo','Url logo','max_length[100]',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['kelas','url_logo','keterangan']);
                redirect('adminKelas/insertKelas');
                return false;

            } else {
                
				$this->kelas->insertKelas();
				redirect('adminKelas');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/kelas/insertKelas',$data);
		}
	}

	public function editKelas() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('kelas','Kelas','required|max_length[50]',message_id());
			$this->form_validation->set_rules('url_logo','Url logo','max_length[100]',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['kelas','url_logo'],false);
                redirect('adminKelas/editKelas/'.$this->input->post('kelas_id'));
                return false;

            } else {
                
				$this->kelas->editKelas();
				redirect('adminKelas');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['kelas'] = $this->kelas->getOneKelas();
			$this->template->load('templateAdmin','admin/kelas/editKelas',$data);
		}
	}

	public function deleteKelas() {
		$this->kelas->deleteKelas();
		redirect('adminKelas');
		return true;
	}
}