<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_Usulan_TA extends CI_Model {
	function input_data ($data, $table){
		
	$insert= $this->db->insert ($table, $data);
	return $insert;
	
	}
}
?>
	 