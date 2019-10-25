<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Mmahasiswa');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tampil(){
		
		$data['dat'] = $this->Mmahasiswa->tampil_mahasiswa();
		$this->load->view('vmahasiswa',$data);
	}

	public function tambah_data(){
		$this->load->view('vtambah_data');
	}

	public function tambah_data_action(){
		$insert = array(
			'nama' => $this->input->post("nama"),
			'kingdom' => $this->input->post("kingdom"),
			'spesies' => $this->input->post("spesies"),
		);
		$this->Mmahasiswa->tambah_data($insert);
		redirect('Mahasiswa/tampil');
	}

	public function delete_data($nama){
		$this->Mmahasiswa->delete_data($nama);
		redirect('Mahasiswa/tampil');
	}

	public function ubah($id)
	{
		$data['buah'] = $this->Mmahasiswa->getMahasiswaById($id);

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('kingdom','Kingdom','required');
		$this->form_validation->set_rules('spesies','Spesies','required');

		if($this->form_validation->run()==false){
			$this->load->view('vubah_data',$data);

		}else{

			$this->Mmahasiswa->ubahDataMahasiswa();
			$this->session->set_flashdata('flash','Diubah');
			redirect('Mahasiswa/tampil');
		}
	}
}
