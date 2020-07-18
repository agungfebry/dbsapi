<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas_model extends CI_Model {

	public function tambahFasilitas()
	{
		$data  =
		[	
			'nama'            => htmlspecialchars($this->input->post('nama', true)),
			'jenis_fasilitas' => htmlspecialchars($this->input->post('jenis_fasilitas', true)),
			'alamat'          => htmlspecialchars($this->input->post('alamat', true)),
			'fasilitas'       => htmlspecialchars($this->input->post('fasilitas', true)),
			'longitude'       => htmlspecialchars($this->input->post('longitude', true)),
			'latitude'        => htmlspecialchars($this->input->post('latitude', true)),
			'photo'           => htmlspecialchars($_FILES['foto']['name'])
		];

		$this->db->insert('fasilitas_umum', $data);
	}

	public function getAllFasum()
	{
		return $this->db->get('fasilitas_umum')->result_array();
	}
}