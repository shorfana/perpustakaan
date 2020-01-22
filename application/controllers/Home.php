<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

//   public function __construct()
//   {
//     parent::__construct();
//     //Codeigniter : Write Less Do More
//     $this->load->model('Dbs');

//   }

  function index()
  {


    $this->load->view('front/header');
    $this->load->view('front/index');//melempar data dari view
    $this->load->view('front/footer');

  }

  
  function about()
  {


    $this->load->view('front/header');
    $this->load->view('front/about');//melempar data dari view
    $this->load->view('front/footer');

  }

  
  function book()
  {


    $this->load->view('front/header');
    $this->load->view('front/book');//melempar data dari view
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
