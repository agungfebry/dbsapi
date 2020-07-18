<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_model extends CI_Model {

	// mengambil semua db tabel destinasi
	public function getAllWisata()
	{
		return $this->db->get('destinasi')->result_array();
	}

	// mengambil db destinasi by id
	public function getWisataById($id)
	{
		return $this->db->get_where('destinasi', ['id' => $id])->row_array();
	}

	// menghapus db
	public function deleteById($id)
	{
		$data = $this->db->delete('destinasi', ['id' => $id]);
	}

	// menambah data ke db
	public function tambahWisata()
	{
		$data[]  = [
			'nama'             => htmlspecialchars($this->input->post('nama', true)),
			'jenis_wisata'     => htmlspecialchars($this->input->post('jenis_wisata', true)),
			'alamat'           => htmlspecialchars($this->input->post('alamat', true)),
			'tiket'            => htmlspecialchars($this->input->post('tiket', true)),
			'harga_tiket'      => htmlspecialchars($this->input->post('harga_tiket', true)),
			'fasilitas'        => htmlspecialchars($this->input->post('fasilitas[]', true)),
			'idr_fasilitas'    => htmlspecialchars($this->input->post('idr_fasilitas[]', true)),
			'wahana'           => htmlspecialchars($this->input->post('wahana', true)),
			'hari_operasional' => htmlspecialchars($this->input->post('hari_operasional[]', true)),
			'jam_operasional'  => htmlspecialchars($this->input->post('jam_operasional[]', true)),
			'deskripsi'        => htmlspecialchars($this->input->post('deskripsi', true)),
			'longitude'        => htmlspecialchars($this->input->post('longitude', true)),
			'latitude'         => htmlspecialchars($this->input->post('latitude', true)),
			'photo'            => htmlspecialchars($_FILES['photo']['name'])
		];

		$this->db->insert_batch('destinasi', $data);
	}

	public function tambahWisata1($data)
	{
		return $this->db->insert('destinasi', $data);
	}


	public function editWisata()
	{
		$data  =
		[	
			'nama'             => htmlspecialchars($this->input->post('nama', true)),
			'jenis_wisata'     => htmlspecialchars($this->input->post('jenis_wisata', true)),
			'alamat'           => htmlspecialchars($this->input->post('alamat', true)),
			'tiket'            => htmlspecialchars($this->input->post('tiket', true)),
			'harga_tiket'      => htmlspecialchars($this->input->post('harga_tiket', true)),
			'fasilitas'        => htmlspecialchars($this->input->post('fasilitas', true)),
			'idr_fasilitas'    => htmlspecialchars($this->input->post('idr_fasilitas', true)),
			'wahana'           => htmlspecialchars($this->input->post('wahana', true)),
			'hari_operasional' => htmlspecialchars($this->input->post('hari_operasional', true)),
			'jam_operasional'  => htmlspecialchars($this->input->post('jam_operasional', true)),
			'deskripsi'        => htmlspecialchars($this->input->post('deskripsi', true)),
			'longitude'        => htmlspecialchars($this->input->post('longitude', true)),
			'latitude'         => htmlspecialchars($this->input->post('latitude', true)),
			'photo'            => htmlspecialchars($_FILES['photo']['name'])
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('destinasi', $data);
	}


	public function countAdmin(){
		$query = $this->db->get('user');

		if($query->num_rows() > 0){
			return $query->num_rows();
		}else{
			return 0;
		}
	}

	public function countWisata(){
		$query = $this->db->get('destinasi');

		if($query->num_rows() > 0){
			return $query->num_rows();
		}else{
			return 0;
		}
	}

	public function countFasum(){
		$query = $this->db->get('fasilitas_umum');

		if($query->num_rows() > 0){
			return $query->num_rows();
		}else{
			return 0;
		}
	}




}
