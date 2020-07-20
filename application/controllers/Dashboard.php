<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(['Wisata_model', 'Fasilitas_model']);
		$this->load->library(['form_validation', 'googlemaps']);
		is_logged_in();
	}

	public function index()
	{
		$data['map']         = $this->googlemaps->create_map();
		$data['content']     = 'dashboard';
		$data['title']       = 'Dashboard';
		$data['countAdmin']  = $this->Wisata_model->countAdmin();
		$data['countWisata'] = $this->Wisata_model->countWisata();
		$data['countFasum']  = $this->Wisata_model->countFasum();
		$data['wisata']      = $this->Wisata_model->getAllWisata();
		$data['fasum']       = $this->Fasilitas_model->getAllFasum();
		$this->load->view('admin/template/content', $data);
	}
}
