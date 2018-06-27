<?php 

class M_pembimbing extends CI_Model{
	function tampil_data(){
		$this->db->select('*');
		$this->db->from('ta_fix');
		return $this->db->get();
	}
	 
	public function buttonpilih ($data, $table) {
		$insert = $this->db->insert($table, $data);
		return($insert);
	}
	
	
}

?>
