<?php 

class M_fixpembimbing extends CI_Model{
	function tampil_data(){
		$this->db->select('*');
		$this->db->from('membimbing');
		return $this->db->get();
	}
}

?>