<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Mahasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Input_Usulan_TA');
		$this -> load -> helper('url');
	}
	public function index(){
		$this->template->load('static', 'view_input_mhs');
	}
	
	function insert(){
		 $nim = $this->input->post('nim');
		 $nama = $this->input->post('nama');
		 $judul_ta = $this->input->post('judul_ta');
		 $dosen_pengusul = $this->input->post('dosen_pengusul');
		 $ringkasan = $this->input->post ('ringkasan');
		 $usulan_dospem = $this->input->post ('usulan_dospem');
		 $jenis = $this->input->post ('jenis');
	
		 
		 $data = array (	 	
			'NIM'=> $nim, 	
			'NAMA'=> $nama, 
			'JUDUL_TA'=> $judul_ta, 
			'DOSEN_PENGUSUL'=> $dosen_pengusul, 
			'RINGKASAN'=> $ringkasan, 
			'USULAN_DOSPEM'=> $usulan_dospem, 
			'JENIS'=> $jenis, 
		);
		$this->Input_Usulan_TA->input_data ($data,'usulan_ta');
		redirect ('Form_Mahasiswa');
	}
}
?>