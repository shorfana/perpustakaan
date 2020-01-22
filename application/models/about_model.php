<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about_model extends CI_Model {



 function getDataPerpus($id_admin){
   $query = $this->db->get_where('perpus', array('ID_PERPUS' => $id_admin));
   return $query->row();
 }

 



}