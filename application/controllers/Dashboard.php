<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Wisata_model', '__model');
		is_logged_in();
	}

	public function index()
	{
		$data['content']     = 'dashboard';
		$data['title']       = 'Dashboard';
		$data['countAdmin']  = $this->__model->countAdmin();
		$data['countWisata'] = $this->__model->countWisata();
		$data['countFasum']  = $this->__model->countFasum();
		$data['menu']        = $this->__model->getAllWisata();
		$this->load->view('admin/template/content', $data);
	}
}
