 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

	public function insertcover($id_petugas, $cover){
		$data = array(
			'ID_BUKU'		=> $this->generateID(),
			'ID_ADMIN'		=> $id_petugas,
			'TITLE'			=> $this->input->post('judul'),
			'AUTHOR'		=> $this->input->post('penulis'),
			'SINOPSIS'		=> $this->input->post('sinopsis'),
			'PUBLISHER'		=> $this->input->post('penerbit'),
			'ISBN'			=> $this->input->post('isbn'),
			'YEAR'			=> $this->input->post('tahun'),
			'QTY'			=> $this->input->post('jumlah'),
			'KELUAR'		=> 0,
			'COVER_BUKU'	=> $cover['file_name'],
			'FILE_BUKU'		=> $this->input->post('file')
			 );
 
		$this->db->insert('buku', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function insert($id_petugas){
		$data = array(
			'ID_BUKU'		=> $this->generateID(),
			'ID_ADMIN'		=> $id_petugas,
			'TITLE'			=> $this->input->post('judul'),
			'AUTHOR'		=> $this->input->post('penulis'),
			'SINOPSIS'		=> $this->input->post('sinopsis'),
			'PUBLISHER'		=> $this->input->post('penerbit'),
			'ISBN'			=> $this->input->post('isbn'),
			'YEAR'			=> $this->input->post('tahun'),
			'QTY'			=> $this->input->post('jumlah'),
			'KELUAR'		=> 0,
			'FILE_BUKU'		=> $this->input->post('file')
			 );
 
		$this->db->insert('buku', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function update($id){
		$data = array(
			'TITLE'			=> $this->input->post('judul'),
			'AUTHOR'		=> $this->input->post('penulis'),
			'SINOPSIS'		=> $this->input->post('sinopsis'),
			'ISBN'			=> $this->input->post('isbn'),
			'PUBLISHER'		=> $this->input->post('penerbit'),
			'YEAR'			=> $this->input->post('tahun'),
			'QTY'			=> $this->input->post('jumlah'),
			'FILE_BUKU'		=> $this->input->post('file')
			 );

		$this->db->where('ID_BUKU', $id)->update('buku', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function updatecover($id,$cover){
		$data = array(
			'TITLE'			=> $this->input->post('judul'),
			'AUTHOR'		=> $this->input->post('penulis'),
			'SINOPSIS'		=> $this->input->post('sinopsis'),
			'ISBN'			=> $this->input->post('isbn'),
			'PUBLISHER'		=> $this->input->post('penerbit'),
			'YEAR'			=> $this->input->post('tahun'),
			'QTY'			=> $this->input->post('jumlah'),
			'COVER_BUKU'	=> $cover['file_name'],
			'FILE_BUKU'		=> $this->input->post('file')
			 );

		$this->db->where('ID_BUKU', $id)->update('buku', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}


	public function getCount(){
		return $this->db->count_all('buku');
	}

	public function getList(){
		return $query = $this->db->order_by('ID_BUKU','ASC')->get('buku')->result();
	}

	public function generateID(){
		$query = $this->db->order_by('ID_BUKU', 'DESC')->limit(1)->get('buku')->row('ID_BUKU');
		$lastNo = substr($query, 3);
		$next = $lastNo + 1;
		$kd = 'BKO';
		return $kd.sprintf('%03s', $next);
	}

	public function getDetail($id){
		return $this->db->where('ID_BUKU', $id)->get('buku')->row();
	}

	public function delete($id){
		$this->db->where('ID_BUKU', $id)->delete('buku');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function checkAvailability($id){
		$query = $this->db->where('ID_BUKU', $id)->get('buku');
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}


}

/* End of file Buku_model.php */
/* Location: ./application/models/Buku_model.php */
