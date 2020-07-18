<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Wisata_model', '__model');
		$this->load->library('form_validation');
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
		$data['content'] = 'wisata';
		$data['title']   = 'Tabel Wisata';
		$data['menu']    = $this->__model->getAllWisata();
		$this->load->view('admin/template/content', $data);
	}

	public function addWisata()
	{
		$this->_setRules();

		if($this->form_validation->run() == false ) 
		{
			$data['content'] = 'addWisata';
			$data['title']   = 'Tambah  Wisata';
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
			$this->__model->tambahWisata1($data);
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('wisata/addWisata'); 

		}
	}

	public function editWisata($id)
	{
		$data['menu'] = $this->__model->getWisataById($id);
		$this->_setRules($id);

		if($this->form_validation->run() == false ) 
		{
			$data['content'] = 'editWisata';
			$data['title']   = 'Edit Wisata';
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
			$this->__model->editWisata();
			$this->session->set_flashdata('flash', 'dirubah');
			redirect('wisata'); 
		}
	}

	public function deleteWisata($id)
	{
		$this->__model->deleteById($id);

		$this->session->set_flashdata('flash', 'dihapus');
		redirect('wisata');
	}

	// jenis wisata

	public function jenisWisata()
	{
		$data['content'] = 'jenisWisata';
		$data['title']   = 'Jenis Wisata';
		$data['menu']    = $this->__model->getAllJenisWisata();
		$this->load->view('admin/template/content', $data);
	}

	public function tambahJenisWisata()
	{
		$this->form_validation->set_rules('jenis_wisata', 'Jenis Wisata', 'trim|required');

		if($this->form_validation->run()==false)
		{
			$data['content'] = 'jenisWisata';
			$data['title']   = 'Tambah Jenis Wisata';
			$data['menu']    = $this->__model->getAllJenisWisata();
			$this->load->view('admin/template/content', $data);	
		}
		else
		{
			$this->__model->tambahJenisWisata();
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('wisata/jenisWisata'); 
		}
	}

	public function deleteJenisWisata($id)
	{
		$this->__model->deleteJenisWisata($id);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('wisata/jenisWisata');
	}

	public function editJenisWisata()
	{
		echo json_encode($this->__model->getJenisWisataById($_POST['id']));
	}

	public function ubahJenisWisata()
	{
		$this->form_validation->set_rules('jenis_wisata', 'Jenis Wisata', 'trim|required');

		if($this->form_validation->run()==false)
		{
			$data['content'] = 'jenisWisata';
			$data['title']   = 'Tambah Jenis Wisata';
			$data['menu']    = $this->__model->getAllJenisWisata();
			$this->load->view('admin/template/content', $data);	
		}
		else
		{
			$this->__model->editJenisWisata();
			$this->session->set_flashdata('flash', 'dirubah');
			redirect('wisata/jenisWisata'); 
		}	
	}
}