<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baca extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
		$this->load->model('Home_model');

    if(!$this->session->userdata('status')=='login'){
            echo "<script type='text/javascript'>alert('Kalo mau baca login dulu brooo'); document.location='".base_url()."home/books"."' </script>";
    }
  }

  function index()
  {
    $this->load->view('front/header');
    $this->load->view('front/baca');//melempar data dari view
    $this->load->view('front/footer');

  }

  function buku($id_buku){

    $data['buku'] = $this->Home_model->getBukuDetail($id_buku);

    $this->load->view('front/header');
    $this->load->view('front/baca',$data);//melempar data dari view
    $this->load->view('front/footer');
  }

}
