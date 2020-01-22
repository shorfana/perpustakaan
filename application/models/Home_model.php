<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {


 function getDataPerpus($id_admin){
   $query = $this->db->get_where('perpus', array('ID_PERPUS' => $id_admin));
   return $query->row();
 }

 function getBukuByIdPerpus($id_admin){
    // $query = $this->db->get_where('buku', array('ID_ADMIN' => $id_admin));

    $this->db->select('*');
    $this->db->from('buku');
    $this->db->join('kategori_buku', 'buku.ID_KATEGORI = kategori_buku.ID_KATEGORI');
    $this->db->where('ID_ADMIN', $id_admin);
    $query = $this->db->get();
    return $query->result();
 }

 function getBukuBestSellerByIdPerpus(){

 }

 function getBukuDetail($id_buku){
   $this->db->select('*');
   $this->db->from('buku');
   $this->db->join('kategori_buku', 'buku.ID_KATEGORI = kategori_buku.ID_KATEGORI');
   $this->db->where('ID_BUKU', $id_buku);
   $query = $this->db->get();
   return $query->row();
 }


}
