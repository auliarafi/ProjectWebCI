<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dospemfix extends CI_Controller {
	function __construct()
	{
		parent::__construct();		
		$this->load->model('M_fixpembimbing');
	}

	public function index()
	{
		$d['dospemfix'] = $this->M_fixpembimbing->tampil_data()->result();
		$this->template->load('static', 'v_tampil_dospem', $d);
		
	}
	
	public function memilih()
	{
		
		if(isset($_POST['pilih']))
		{
			$NIM = $_POST['NIM'];
			$NAMA = $_POST['Nama Mahasiswa'];
			$NAMA_DOSEN = $_POST['Dosen Pembimbing'];
			
			
		}
	}

			
}
?>