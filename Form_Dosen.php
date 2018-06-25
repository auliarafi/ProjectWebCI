<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Dosen extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Penelitian_model');
		$this->load->helper('url');
}

	function index()
	{
		$this->template->load('static', 'view_input_dosen');
	}
	function insert(){	
				$judul =  $this->input->post('judul_penelitian');
				$nip =  $this->input->post('NIP');
				$namadosen =  $this->input->post('nama');
				$ringkasan =  $this->input->post('ringkasan');
				$data = array(
						'JUDUL_PENELITIAN' => $judul,
						'NIP' => $nip,
						'NAMA_DOSEN' => $namadosen,
						'RINGKASAN' => $ringkasan);
	$this->Penelitian_model->ProsesInsert($data, 'penelitian' );
	redirect('form_dosen/index');
	}
	}
