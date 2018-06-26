<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_TA_Fix extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Input_Ta_Fix_model');
		$this->load->helper('url');
 
	}
 
	function index(){
		$this->template->load('static', 'view_input_ta_fix');
	}
 
	
	function insert(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$uj = $this->input->post('usulanjudul');
		$dospeng = $this->input->post('dosen_pengusul');
		$ringkasan = $this->input->post('ringkasan');
		$up = $this->input->post('usulan_dosen_pembimbing');
		$jenis = $this->input->post('jenis');
		$hr = $this->input->post('review');
 
		$data = array(
			'NIM' => $nim,
			'NAMA' => $nama,
			'JUDUL_TA_FIX' => $uj,
			'DOSEN_PENGUSUL' => $dospeng,
			'RINGKASAN' => $ringkasan,
			'DOSPEM' => $up,
			'JENIS' => $jenis,
			'REVIEW' => $hr
			);
		$this->Input_Ta_Fix_model->input_data($data,'ta_fix');
		redirect('Form_TA_Fix');
	}
 }
?>