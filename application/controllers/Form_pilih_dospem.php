<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_pilih_dospem extends CI_Controller {
	function __construct()
	{
		parent::__construct();		
		$this->load->model('M_pembimbing');
	}

	public function index()
	{
		$t['tfix'] = $this->M_pembimbing->tampil_data()->result();
		$this->template->load('static', 'view_pilih_dospem', $t);
		
	}
	

			
}
?>