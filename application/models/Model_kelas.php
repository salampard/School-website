<?php

/**
* 
*/
class Model_kelas extends CI_Model {

	public function getKelas() {
		return $this->db->get("kelas")->result();
	}

	public function getOneKelas() {
		return $this->db->get_where('kelas',['kelas_id' => $this->uri->segment(3)])->row();
	}
	
	public function insertKelas() {
		$data = [
			'kelas_id' => $this->uuid->generate_uuid(),
			'kelas' => $this->input->post('kelas'),
			'url_logo' => $this->input->post('url_logo'),
			'keterangan' => $this->input->post('keterangan',false)
		];
		$this->db->insert('kelas',$data);
		return true;
	}

	public function editKelas() {
		$kelas_id = $this->input->post('kelas_id');
		$data = [
			'kelas' => $this->input->post('kelas'),
			'url_logo' => $this->input->post('url_logo'),
			'keterangan' => $this->input->post('keterangan',false)
		];
		$this->db->where('kelas_id',$kelas_id);
		$this->db->update('kelas',$data);
		return true;
	}

	public function deleteKelas() {
		$this->db->where('kelas_id',$this->uri->segment(3));
		$this->db->delete('kelas');
		return true;
	}
}