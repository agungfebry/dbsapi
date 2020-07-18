<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Destinasi extends REST_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Api_model', '__model');
	}


	public function index_get()
	{
		$id = $this->get('id');
		if($id === null) {
			$data = $this->__model->getData();
		} 
		else {
			$data = $this->__model->getData($id);
		}

		if($data){
			$this->response([
				'status' => true,
				'data' => $data
			], REST_Controller::HTTP_OK);
		}else {
			$this->response([
				'status' => false,
				'message' => 'id not found'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}

	public function menu_get() {

		$jenis_wisata = $this->get('jenis_wisata');

		if($jenis_wisata === null) {
			$data = $this->__model->getJenisWisata();	

		} else {
			$data = $this->__model->getJenisWisata($jenis_wisata);
		}

		if($data){
			$this->response([
				'status' => true,
				'data' => $data
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => false,
				'message' => 'id not found'
			], REST_Controller::HTTP_NOT_FOUND);
		}

	}

	/*public function index_delete()
	{
		$id = $this->delete('id');
		if($id === null){
			$this->response([
				'status' => false,
				'message' => 'provide an Id!'
			], REST_Controller::HTTP_BAD_REQUEST);
		}else{
			if($this->mahasiswa->deleteMahasiswa($id) > 0){
				// ok
				$this->response([
					'status' => true,
					'id' => $id,
					'message' => 'deleted'
				], REST_Controller::HTTP_OK);


			}else{
				// id not found
				$this->response([
					'status' => false,
					'message' => 'id not found'
				], REST_Controller::HTTP_BAD_REQUEST);

			}
		}
	}*/
}