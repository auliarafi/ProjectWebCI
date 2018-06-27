<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_pilih_dospem extends CI_Controller {
	function __construct()
	{
		parent::__construct();		
		$this->load->model('M_pembimbing');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$t['tfix'] = $this->M_pembimbing->tampil_data()->result();
		$this->template->load('static', 'view_pilih_dospem', $t);
		
	}
	
	public function insert()
	{
		 $NIM = $this->input->post('NIM');
		 $NAMA_MAHASISWA = $this->input->post('NAMA_MAHASISWA');
		 $NAMA_DOSEN = $this->input->post ('NAMA_DOSEN');
	
		 
		 $data = array (	 	
			'NIM'=> $NIM, 	
			'NAMA_MAHASISWA'=> $NAMA_MAHASISWA, 
			'NAMA_DOSEN'=> $NAMA_DOSEN, 
		);
		$this->M_pembimbing->buttonpilih ($data,'membimbing');
		redirect ('Form_pilih_dospem');
	}
}
?>
