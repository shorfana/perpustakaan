<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function insert(){
		$data = array(
			'ID_KATEGORI'	=> $this->generateID(),
			'KATEGORI'		=> $this->input->post('nama_kategori')
			 );
 
		$this->db->insert('kategori_buku', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function update($id){
		$data = array(
			'KATEGORI'		=> $this->input->post('nama_kategori')
			 );

		$this->db->where('ID_KATEGORI', $id)->update('kategori_buku', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getCount(){
		return $this->db->count_all('kategori_buku');
	}

	public function getList(){
		return $query = $this->db->order_by('ID_KATEGORI','ASC')->get('kategori_buku')->result();
	}

	public function generateID(){
		$query = $this->db->order_by('ID_KATEGORI', 'DESC')->limit(1)->get('kategori_buku')->row('ID_KATEGORI');
		$lastNo = substr($query, 3);
		$next = $lastNo + 1;
		$kd = 'KTG';
		return $kd.sprintf('%03s', $next);
	}

	public function getDetail($id){
		return $this->db->where('ID_KATEGORI', $id)->get('kategori_buku')->row();
	}

	public function checkAvailability($id){
		$query = $this->db->where('ID_KATEGORI', $id)->get('kategori_buku');
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('ID_KATEGORI', $id)->delete('kategori_buku');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}


}

/* End of file Anggota_model.php */
/* Location: ./application/models/Anggota_model.php */
