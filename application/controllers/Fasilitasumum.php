<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitasumum extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Fasilitas_model', '__model');
		$this->load->library('form_validation');
		$this->load->helper(array('url', 'file'));
		is_logged_in();
	}

	public function index()
	{
		$data['content'] = 'index_fasum';
		$data['title']   = 'Fasilitas Umum';
		$data['menu']    = $this->__model->getAllFasum();
		$this->load->view('admin/template/content', $data);
	}

	public function _setRules() 
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jenis_fasilitas', 'Jenis Fasilitas', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');
		$this->form_validation->set_rules('longitude', 'Longitude', 'required');
		$this->form_validation->set_rules('latitude', 'Latitude', 'required');
		$this->form_validation->set_rules('foto', 'Foto');
	}

	public function tambahFasilitas(){

		$this->_setRules();

		if($this->form_validation->run() == false ){
			$data['content'] = 'fasilitasUmum';
			$data['title']   = 'Tambah Fasilitas Umum';
			$this->load->view('admin/template/content', $data);
		}
		else{
			$config['upload_path']   = './assets/img/upload';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['overwrite']     = true;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if(!$this->upload->do_upload('photo'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('fasilitasumum/tambahFasilitas', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$this->__model->tambahFasilitas();
				$this->session->set_flashdata('flash', 'ditambahkan');
				redirect('fasilitasumum'); 
			}
		}
	}
}