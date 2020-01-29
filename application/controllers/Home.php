<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Home_model');


  }

  function index($np)
  {
    // var_dump($np);die;
    $data_perpus = $this->Home_model->getWherePerpus($np);
    $id_perpus = $data_perpus->ID_PERPUS;
    $id_admin = $data_perpus->ID_ADMIN;
    // var_dump($data_perpus);die;

    $data['perpus'] = $this->Home_model->getDataPerpus($id_perpus);
    $data['buku']   = $this->Home_model->getBukuByIdPerpus($id_admin);

    $this->load->view('front/header');
    $this->load->view('front/index',$data);//melempar data dari view
    $this->load->view('front/footer');

  }

  // function p_name($nama_perpus)
  // {
  //   $data_perpus = $this->Home_model->getWherePerpus($nama_perpus);
  //   $id_perpus = $data_perpus->ID_PERPUS;
  //   $id_admin = $data_perpus->ID_ADMIN;
  //   $data['perpus'] = $this->Home_model->getDataPerpus($id_perpus);
  //   $data['buku']   = $this->Home_model->getBukuByIdPerpus($id_admin);
  //
  //   $this->load->view('front/header');
  //   $this->load->view('front/index',$data);//melempar data dari view
  //   $this->load->view('front/footer');

  // }


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
    $id_perpus = '1';
    $id_admin = 'AD001';
    $data['perpus'] = $this->Home_model->getDataPerpus($id_perpus);
    $data['buku']   = $this->Home_model->getBukuByIdPerpus($id_admin);

    $this->load->view('front/header');
    $this->load->view('front/books',$data);//melempar data dari view
    $this->load->view('front/footer');

  }

  function fkategori()
  {
    $id_admin = 'AD001';
    $data['kategori'] = $this->Home_model->getCategory($id_admin);

    // var_dump($data);die;
    $this->load->view('front/header');
    $this->load->view('front/fkategori',$data);//melempar data dari view
    $this->load->view('front/footer');

  }

  // function haha(){
  //   $this->load->view('front/header');
  //   $this->load->view('front/index');//melempar data dari view
  //   $this->load->view('front/footer');
  // }



}
