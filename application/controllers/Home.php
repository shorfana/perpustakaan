<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Home_model');


  }

  function index()
  {
    $id_perpus = '1';
    $id_admin = 'AD001';
    $data['perpus'] = $this->Home_model->getDataPerpus($id_perpus);
    $data['buku']   = $this->Home_model->getBukuByIdPerpus($id_admin);

    $this->load->view('front/header');
    $this->load->view('front/index',$data);//melempar data dari view
    $this->load->view('front/footer');

  }


  function about()
  {


    $this->load->view('front/header');
    $this->load->view('front/about');//melempar data dari view
    $this->load->view('front/footer');

  }


  function book($id_buku)
  {
    $data['buku_detail'] = $this->Home_model->getBukuDetail($id_buku);

    $this->load->view('front/header');
    $this->load->view('front/book',$data);//melempar data dari view
    $this->load->view('front/footer');

  }

  function books()
  {


    $this->load->view('front/header');
    $this->load->view('front/books');//melempar data dari view
    $this->load->view('front/footer');

  }

  function kategori()
  {
    $this->load->view('front/header');
    $this->load->view('front/kategori');//melempar data dari view
    $this->load->view('front/footer');

  }

  // function haha(){
  //   $this->load->view('front/header');
  //   $this->load->view('front/index');//melempar data dari view
  //   $this->load->view('front/footer');
  // }



}
