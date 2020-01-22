<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Konfigurasi_model');
		$this->load->model('Petugas_model');
		if($this->session->userdata('logged_in') == false){
			redirect('welcome');
		}
	}
 
	public function detail(){
		$id = $this->input->post('id');
		$data['detail'] =  $this->Konfigurasi_model->getDetail($id);
		$this->load->view('konfigurasi/konfigurasi_detail_view', $data);
	}

	public function edit(){
		$unm = $this->input->get('change_key');
		$data['det'] = $this->Konfigurasi_model->getDetail($unm);
		$data['title'] = 'Edit Perpus';
		$data['primary_view'] = 'konfigurasi/edit_konfigurasi_view';
		$this->load->view('template_view', $data);
	}

	public function simpan(){
		if($this->input->post('submit')){
			$this->form_validation->set_rules('namaperpus', 'Nama Perpus', 'trim|required');
			$this->form_validation->set_rules('alamatperpus', 'Alamat Perpus', 'trim|required');
			$this->form_validation->set_rules('about', 'Tentang Perpus', 'trim|required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi Perpus', 'trim|required');
			$this->form_validation->set_rules('status', 'Status Paket', 'trim|required');

			if ($this->form_validation->run() == true) {
				$config['upload_path'] = './assets/images/upload/perpus/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '2000';

				$this->load->library('upload', $config);
				$id_perpus = $this->Petugas_model->getIDPerpus($this->session->userdata('username'));

				if ($this->upload->do_upload('foto') == true){
					if($this->Konfigurasi_model->update($id_perpus, $this->upload->data()) == true){
						$this->session->set_flashdata('announce', 'Berhasil menyimpan data');
						redirect('konfigurasi/edit?change_key='.$this->input->post('id').'&signup=0');
					}else{
						$this->session->set_flashdata('announce', 'Gagal menyimpan data');
						redirect('konfigurasi/edit?change_key='.$this->input->post('id').'&signup=0');
					}
				}else{
					$this->session->set_flashdata('announce', $this->upload->display_errors());
					redirect('konfigurasi/edit?change_key='.$this->input->post('id').'&signup=0');
				}
			} else {
				$this->session->set_flashdata('announce', validation_errors());
				redirect('konfigurasi/edit?change_key='.$this->input->post('id').'&signup=0');
			}
		}
	}
}