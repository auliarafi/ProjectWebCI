<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('view_daftar');
	}
	
	public function insert()
	{
		$data = array(	'id_user' => 	$this->input->post('', true),
						'username' => 	$this->input->post('username', true),
						'nama_lengkap' => 	$this->input->post('nama', true),
						'password' => 	$this->input->post('password', true),
						'level' => 	$this->input->post('level', true));
		$insert = $this->M_daftar->prosesInsert('user', $data);
		if($insert > 0)
		{
			echo "berhasil disimpan";
		}else{
			echo "gagal disimpan";
		}
	}
}
