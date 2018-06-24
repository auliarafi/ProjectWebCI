<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_daftar extends CI_Model {

	function __construct(){
		parent:: __construct();
	}
	
	public function prosesInsert($table_name)
	{
		$insert = $this->db->insert($table_name);
		return $insert;
	}
}
