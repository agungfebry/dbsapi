<?php

class Api_model extends CI_Model
{
	public function getData($id = null)
	{
		if ($id === null) {
			return $this->db->get('destinasi')->result_array();
		} else {
			return $this->db->get_where('destinasi', ['id' => $id])->result_array();
		}
	}

	public function getJenisWisata($jenis_wisata = null)
	{
		if ($jenis_wisata === null) {
			return $this->db->get('destinasi')->result_array();
		} else {
			return $this->db->get_where('destinasi', ['jenis_wisata' => $jenis_wisata])->result_array();
		}
	}



	public function deleteData($id)
	{
		$this->db->delete('destinasi', ['id' => $id]);
		return $this->db->affected_rows();
	}
}
