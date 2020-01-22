
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model {

	public function getDetail($id){
		return $this->db->where('ID_PERPUS', $id)->get('perpus')->row();
	}

	public function update($id, $foto){
		$dat = array(
			'NAMA_P'	=> $this->input->post('fullname'),
			'ALAMAT_P'	=> $this->input->post('username'),
			'ABOUT'		=> $this->input->post('jk'),
			'DESKRIPSI'	=> $this->input->post('telp'),
			'GAMBAR'	=> $foto['file_name']
		);
		$this->db->where('ID_PERPUS', $id)->update('perpus', $dat);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}