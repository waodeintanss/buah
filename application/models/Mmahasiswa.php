<?php

class Mmahasiswa extends CI_Model{

	public function tampil_mahasiswa(){
		$query = $this->db->get("buah");
		return $query->result();
	}

	public function tambah_data($data){
		$this->db->insert("buah",$data);
	}

	public function delete_data($nama){
		$this->db->where("nama",$nama);
		$this->db->delete("buah");
	}

	public function getMahasiswaById($nama)
	{
		return $this->db->get_where('buah', ['nama' => $nama])->row_array();
	}

	public function ubahDataMahasiswa()
	{
		$data = [
			"nama" => $this->input->post('nama',true),
			"kingdom" => $this->input->post('kingdom',true),
			"spesies" => $this->input->post('spesies',true),
				
		];

		$this->db->where('id',$this->input->post('id'));
		$this->db->update('buah',$data);
	}
}
