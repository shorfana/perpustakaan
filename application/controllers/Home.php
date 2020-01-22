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

  // function haha(){
  //   $this->load->view('front/header');
  //   $this->load->view('front/index');//melempar data dari view
  //   $this->load->view('front/footer');
  // }



}
