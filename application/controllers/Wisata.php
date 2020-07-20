<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Wisata_model');
		$this->load->library(['form_validation', 'googlemaps']);
		$this->load->helper(array('url', 'file'));
		is_logged_in();
	}

	public function _setRules() 
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('jenis_wisata', 'Jenis Wisata', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('tiket', 'Tiket', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('harga_tiket', 'Harga Tiket', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('fasilitas[]', 'Fasilitas', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('idr_fasilitas[]', 'Idr Fasilitas', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('wahana', 'Wahana', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('hari_operasional[]', 'Hari Operasional', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('jam_operasional[]', 'Jam Operasional', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('longitude', 'Longitude', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('latitude', 'Latitude', 'required', ['required' => '{field} tidak boleh kosong.']);
		$this->form_validation->set_rules('photo', 'Image');
	}

	public function index()
	{
		$data     = [
			'content' => 'wisata',
			'title'   => 'Tabel Wisata',
			'map'     => $this->googlemaps->create_map(),
			'menu'    => $this->Wisata_model->getAllWisata()];
			$this->load->view('admin/template/content', $data);
		}

		public function addWisata()
		{
			$config['center']    = '-5.4816917,104.6802833';
			$config['zoom']      = 15;
			$this->googlemaps->initialize($config);
			
			$marker['position']  = '-5.4816917,104.6802833';
			$marker['draggable'] = true;
			$marker['ondragend'] = 'setToForm(event.latLng.lat(),event.latLng.lng())';
			$this->googlemaps->add_marker($marker);

			$this->_setRules();

			if($this->form_validation->run() == false ) 
			{
				$data['content'] = 'addWisata';
				$data['title']   = 'Tambah  Wisata';
				$data['map']     = $this->googlemaps->create_map();
				$this->load->view('admin/template/content', $data);	
			}
			else
			{

				$data = [
					'nama'             => $this->input->post('nama'),
					'jenis_wisata'     => $this->input->post('jenis_wisata'),
					'alamat'           => $this->input->post('alamat'),
					'tiket'            => $this->input->post('tiket'),
					'harga_tiket'      => $this->input->post('harga_tiket'),
					'fasilitas'        => json_encode($this->input->post('fasilitas')),
					'idr_fasilitas'    => json_encode($this->input->post('idr_fasilitas')),
					'wahana'           => $this->input->post('wahana'),
					'hari_operasional' => json_encode($this->input->post('hari_operasional')),
					'jam_operasional'  => json_encode($this->input->post('jam_operasional')),
					'deskripsi'        => $this->input->post('deskripsi'),
					'longitude'        => $this->input->post('longitude'),
					'latitude'         => $this->input->post('latitude'),
					'photo'            => $_FILES['photo']['name'],
				];


				$config['upload_path']   = './assets/img/upload';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['overwrite']     = true;

				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if(!$this->upload->do_upload('photo'))
				{
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('wisata/addWisata', $error);
				}
				else
				{
				// $data = ['upload_data' => $this->upload->data()];
				}			
				$this->Wisata_model->tambahWisata1($data);
				$this->session->set_flashdata('flash', 'ditambahkan');
				redirect('wisata/addWisata'); 

			}
		}

		public function editWisata($id)
		{
			$config['center']    = '-5.4816917,104.6802833';
			$config['zoom']      = 15;
			$this->googlemaps->initialize($config);
			
			$marker['position']  = '-5.4816917,104.6802833';
			$marker['draggable'] = true;
			$marker['ondragend'] = 'setToForm(event.latLng.lat(),event.latLng.lng())';
			$this->googlemaps->add_marker($marker);

			$data['menu'] = $this->Wisata_model->getWisataById($id);
			
			$this->_setRules($id);

			if($this->form_validation->run() == false ) 
			{
				$data['content'] = 'editWisata';
				$data['title']   = 'Edit Wisata';
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
						$this->load->view('wisata/editWisata', $error);
					}
					else
					{
						$data = array('upload_data' => $this->upload->data());
					}
				} 
				else {
					$this->image = $post["old_image"];
				}
				$this->Wisata_model->editWisata();
				$this->session->set_flashdata('flash', 'dirubah');
				redirect('wisata'); 
			}
		}

		public function deleteWisata($id)
		{
			$this->Wisata_model->deleteById($id);

			$this->session->set_flashdata('flash', 'dihapus');
			redirect('wisata');
		}

		
	}