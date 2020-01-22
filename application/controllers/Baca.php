<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baca extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if(!$this->session->userdata('status')=='login'){
            echo "<script type='text/javascript'>alert('Kalo mau baca login dulu brooo'); document.location='".base_url()."home/books"."' </script>";
    }
  }

  function index()
  {

  }

  function buku(){
    echo "Baca nih bukunya";
  }

}
