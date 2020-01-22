<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		if($this->Login_model->accountCheck() == true){
			redirect('setup');
		}
		if($this->session->userdata('logged_in') == true){
			redirect('welcome');
		}


	}

	public function index(){
		if($this->session->userdata('status')=='login'){
            redirect(base_url());
          }
		$this->load->view('login_view');
	}

	public function dologin(){
		if($this->input->post('login')){
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$username=$this->input->post('username');
      $password=$this->input->post('password');
      $where=array(
        	'username' => $username,
        	'password' => md5($password)
      );

			if ($this->form_validation->run() == true) {
				if($this->Login_model->userCheck() == true){
					$src = $this->input->get('src');
					if(!empty($src)){
						redirect($src);
					}else{redirect('dashboard');}
				}elseif ($this->Login_model->cek_login("anggota",$where)->num_rows()>0) {
					$id_user = $this->Login_model->getUserId($username);
        		    $data_session = array(
                        'status' => 'login',
                        'username' => $username,
                        'id_user' => $id_user->id
                    );
                $this->session->set_userdata($data_session);
					redirect(base_url());
				}else{
					$this->session->set_flashdata('announce', 'Invalid username or password');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('announce', validation_errors());
				redirect('login');
			}



		}
	}

	public function logout(){
			$this->session->sess_destroy();
			redirect(base_url()."login");
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
