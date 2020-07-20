<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitasumum extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Fasilitas_model', '__model');
		$this->load->library(['form_validation', 'googlemaps']);
		$this->load->helper(array('url', 'file'));
		is_logged_in();
	}

	public function index()
	{
		$data['content'] = 'index_fasum';
		$data['title']   = 'Fasilitas Umum';
		$data['map']     = $this->googlemaps->create_map();
		$data['menu']    = $this->__model->getAllFasum();
		$this->load->view('admin/template/content', $data);
	}

	public function _setRules() 
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('jenis_fasilitas', 'Jenis Fasilitas', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('longitude', 'Longitude', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('latitude', 'Latitude', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('foto', 'Foto');
	}

	public function tambahFasilitas() {
		$config['center']    = '-5.4816917,104.6802833';
		$config['zoom']      = 15;
		$this->googlemaps->initialize($config);

		$marker['position']  = '-5.4816917,104.6802833';
		$marker['draggable'] = true;
		$marker['ondragend'] = 'setToForm(event.latLng.lat(),event.latLng.lng())';
		$this->googlemaps->add_marker($marker);

		$this->_setRules();

		if($this->form_validation->run() == false ){
			$data['content'] = 'fasilitasUmum';
			$data['title']   = 'Tambah Fasilitas Umum';
			$data['map']     = $this->googlemaps->create_map();
			$this->load->view('admin/template/content', $data);
		}
		else{
			$config['upload_path']   = './assets/img/upload';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['overwrite']     = true;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if(!$this->upload->do_upload('foto'))
			{
				$error = array('error' => $this->upload->display_errors());
				// $this->load->view('fasilitasumum/tambahFasilitas', $error);
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

	public function editFasilitas($id)
		{
			$config['center']    = '-5.4816917,104.6802833';
			$config['zoom']      = 15;
			$this->googlemaps->initialize($config);
			
			$marker['position']  = '-5.4816917,104.6802833';
			$marker['draggable'] = true;
			$marker['ondragend'] = 'setToForm(event.latLng.lat(),event.latLng.lng())';
			$this->googlemaps->add_marker($marker);

			$data['menu'] = $this->__model->getFasilitasById($id);
			
			$this->_setRules($id);

			if($this->form_validation->run() == false ) 
			{
				$data['content'] = 'editFasum';
				$data['title']   = 'Edit Fasilitas';
				$data['map']     = $this->googlemaps->create_map();
				$this->load->view('admin/template/content', $data);
			}
			else
			{	
				if (!empty($_FILES["image"]["name"])) {

					$config['upload_path']   = './assets/img/upload';
					$config['allowed_types'] = 'jpg|jpeg|png';
					$config['overwrite']     = true;

					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if(!$this->upload->do_upload('photo'))
					{
						$error = array('error' => $this->upload->display_errors());
						$this->load->view('fasilitasumum/editFasilitas', $error);
					}
					else
					{
						$data = array('upload_data' => $this->upload->data());
					}
				} 
				else {
					$this->image = $post["old_image"];
				}
				$this->Wisata_model->editFasilitas();
				$this->session->set_flashdata('flash', 'dirubah');
				redirect('fasilitasumum'); 
			}
		}
}