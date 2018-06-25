<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penelitian_model extends CI_Model {
	
public function ProsesInsert($data, $table)
	{  
		$insert=$this->db->insert($table, $data);
		return $insert;
	}
}
?>