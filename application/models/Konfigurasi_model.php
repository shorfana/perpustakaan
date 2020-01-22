
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model {

	public function getDetail($id){
		return $this->db->where('ID_PERPUS', $id)->get('perpus')->row();
	}

	public function updatgambar($id, $foto){
		$dat = array(
			'NAMA_P'		=> $this->input->post('namaperpus'),
			'ALAMAT_P'		=> $this->input->post('alamatperpus'),
			'ABOUT'			=> $this->input->post('about'),
			'DESKRIPSI'		=> $this->input->post('deskripsi'),
			'STATUS_PAKET'	=> $this->input->post('statuspaket'),
			'GAMBAR'		=> $foto['file_name']
		);
		$this->db->where('ID_PERPUS', $id)->update('perpus', $dat);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function update($id){
		$dat = array(
			'NAMA_P'		=> $this->input->post('namaperpus'),
			'ALAMAT_P'		=> $this->input->post('alamatperpus'),
			'ABOUT'			=> $this->input->post('about'),
			'DESKRIPSI'		=> $this->input->post('deskripsi'),
			'STATUS_PAKET'	=> $this->input->post('statuspaket'),
		);
		$this->db->where('ID_PERPUS', $id)->update('perpus', $dat);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}